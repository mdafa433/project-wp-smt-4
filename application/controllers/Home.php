<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }
   
    public function index()
    {
       
        $data['title'] = 'Home';
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_topbar', $data);	
        $this->load->view('Home/indek', $data);
        $this->load->view('templates/home_footer'); 
    }

    public function after_login()
    {

        $user = $this->user_model->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = [
            'image' => $user['image'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'tanggal_input' => $user['tanggal_input']
        ];



            $data['title'] = "Welcome";
            $this->load->view('templates/home_header', $data);
            $this->load->view('templates/templates-user/topbar', $data);
            $this->load->view('home/indek', $data);
            $this->load->view('templates/home_footer');
        
    }
    
}
