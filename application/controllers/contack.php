<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contack extends CI_Controller {
	public function index()
	{
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
}
