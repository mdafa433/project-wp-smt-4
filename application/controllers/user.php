<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {


        $user = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input']
        ];

        $data['title'] = 'Profil Saya';
        $this->load->view('templates/home_header',$data);
        $this->load->view('templates/payment_topbar',$data);
        $this->load->view('profile/index', $data);
        $this->load->view('templates/home_footer');
    }


    public function ubahprofil()
    {
        $data['title'] = 'Ubah Profil';
        $data['user'] = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [
            'required' => 'Nama tidak Boleh Kosong'
        ]);

        $user = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input']
        ];

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/home_header',$data);
            $this->load->view('templates/payment_topbar',$data);
            $this->load->view('profile/ubah_profile', $data);
            $this->load->view('templates/home_footer');
        } else {
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);

            //jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './vendor/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2500';
                $config['file_name'] = 'pro' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['user']['image'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'vendor/img/profile/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else { }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="flex items-center rounded-lg bg-green-300 text-white text-sm font-bold px-4 py-3 mb-4" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M0 11.499l2.141-2.14 7.36 7.36 12.198-12.199 2.141 2.141-14.339 14.338z"/></svg>
            <p>Profile Berhasil Berubah</p>
            </div>');
            redirect('user');
        }
    }
}