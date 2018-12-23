<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {


    public function insert_data($data)
    {
        return $this->db->insert('booking', $data);
    }

    public function get_no_of_data()
    {
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->count_all_results('repair');
    }

    public function have_an_booking()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('booking');
        $data[] = null;
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return TRUE;
        }
        return FALSE;
    }

}