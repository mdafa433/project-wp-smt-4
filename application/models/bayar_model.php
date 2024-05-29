<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bayar_model extends CI_Model
{
    

    public function cekData($where = null)
    {
        return $this->db->get_where('bayar', $where);
    }

    
}