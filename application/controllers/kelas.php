<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load model user_model untuk akses ke database
        $this->load->model('user_model');
    }

    public function index()
    {
        // Periksa apakah pengguna sudah login
        if (!$this->session->userdata('email')) {
            // Jika belum, alihkan ke halaman login
            redirect('auth'); // Ganti 'login' dengan alamat halaman login Anda
        }

        // Ambil data pengguna dari database
        $user = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();

        // Data untuk dikirim ke tampilan
        $data['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input']
        ];
        $data['title'] = 'Kelas';

        // Tampilkan halaman kelas
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/payment_topbar', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/home_footer');
    }

    public function cara_bayar()
    {
        // Periksa apakah pengguna sudah login
        if (!$this->session->userdata('email')) {
            // Jika belum, alihkan ke halaman login
            redirect('login'); // Ganti 'login' dengan alamat halaman login Anda
        }

        // Ambil data pengguna dari database
        $user = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();

        // Data untuk dikirim ke tampilan
        $data['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input']
        ];
        $data['title'] = 'Cara Pembayaran';

        // Tampilkan halaman cara_bayar
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/payment_topbar', $data);
        $this->load->view('kelas/cara_bayar', $data);
        $this->load->view('templates/home_footer');
    }

    public function kelas_live()
	
	{

		$user = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input'],
        ];
		$data['title'] = 'About Us';
        $this->load->view('templates/home_header',$data);
        $this->load->view('templates/payment_topbar',$data);
		$this->load->view('kelas-kursus/index',$data);
        $this->load->view('templates/home_footer');
	}
    public function kelas_daftar()
	
	{

		$user = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input'],
        ];
		$data['title'] = 'About Us';
        $this->load->view('templates/home_header',$data);
        $this->load->view('templates/payment_topbar',$data);
		$this->load->view('kelas_daftar/index',$data);
        $this->load->view('templates/home_footer');
	}
}
