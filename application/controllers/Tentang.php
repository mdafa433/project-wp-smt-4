<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tentang extends CI_Controller {

	
	public function about()
	
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
		$this->load->view('tentang/about',$data);
        $this->load->view('templates/home_footer');
	}

    public function alamat()
	
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
		$this->load->view('tentang/alamat',$data);
        $this->load->view('templates/home_footer');
	}

	
}
