<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function addData($data)
    {
        return $this->db->insert('form_register', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function cekform($where = null)
    {
        return $this->db->get_where('form_register', $where);
    }
    public function get_forms()
    {
        return $this->db->get('form_register')->result_array();
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

    public function is_email_exists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->num_rows() > 0;
    }
    public function is_user_logged_in()
    {
        // Misalkan kita menggunakan session 'user_logged_in' untuk menandai apakah pengguna sudah masuk
        return $this->session->userdata('user_logged_in') ? true : false;
    }
}
