<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact_model extends CI_Model {

    public function insert_data($data)
    {
        return $this->db->insert('contact', $data);
    }

    public function get_no_of_data()
    {
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->count_all_results('contact');
    }



}