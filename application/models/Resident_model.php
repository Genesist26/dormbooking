<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resident_model extends CI_Model {

    public function insert_data($data)
    {
        return $this->db->insert('resident', $data);
    }

    public function get_all_information()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('resident');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function get_no_of_data()
    {
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->count_all_results('resident');
    }

    public function is_in_dorm()
    {
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->count_all_results('resident')?1:0;
    }

}