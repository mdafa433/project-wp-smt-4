<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Form_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user = $this->User_model->cekData(['email' => $this->session->userdata('email')])->row_array();
        $dataa['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input'],
        ];
        $dataa['title'] = 'Form';
        $this->load->view('templates/home_header', $dataa);
        $this->load->view('templates/payment_topbar', $dataa);
        $this->load->view('payment/form', $dataa);
        $this->load->view('templates/home_footer');
    }

    public function submit()
    {
        $this->form_validation->set_rules('nama1', 'Nama', 'required');
        $this->form_validation->set_rules('no_whatsapp', 'No WhatsApp', 'required');
        $this->form_validation->set_rules('email1', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('skema_belajar', 'Skema Belajar', 'required');
        $this->form_validation->set_rules('metode_belajar', 'Metode Belajar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index(); // Kembali ke form jika validasi gagal
        } else {
            $data = [
                'nama1' => $this->input->post('nama1'),
                'no_whatsapp' => $this->input->post('no_whatsapp'),
                'email1' => htmlspecialchars($this->input->post('email1')),
                'skema_belajar' => $this->input->post('skema_belajar'),
                'metode_belajar' => $this->input->post('metode_belajar')
            ];

            if ($this->Form_model->insert_form($data)) {
                // Construct WhatsApp URL
                $whatsapp_number = '6281285159120'; // Replace with the actual WhatsApp number
                $message = 'Halo, saya sudah melakukan pemesanan Intro to Python Fast Track. Dengan detail sebagai berikut: Nama: ' . $data['nama1'] . ', Email: ' . $data['email1'] . ', Skema Belajar: ' . $data['skema_belajar'] . ', Metode Belajar: ' . $data['metode_belajar'] . ', segera diproses ya.';
                $whatsapp_url = "https://wa.me/{$whatsapp_number}?text=" . urlencode($message);

                // Redirect to WhatsApp
                redirect($whatsapp_url);
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat menyimpan data.');
                $this->index(); // Kembali ke form jika penyimpanan gagal
            }
        }
    }
}
?>
