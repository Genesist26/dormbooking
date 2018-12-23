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
        $this->db->where('status', '1');
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

    public function get_all_queue(){
        $this->db->where('status', '1');
        $this->db->order_by('timestamp', 'DEC');
        $query = $this->db->get('booking');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function update_status($id){
        $this->db->set('status', '0', FALSE);
        $this->db->where('id', $id);
        $this->db->update('	booking');
        return TRUE;
    }

    public function get_a_queue($id){
        $this->db->where('id', $id);
        $query = $this->db->get('booking');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function get_no_of_noti()
    {
        $this->db->where('status', '1');
        return $this->db->count_all_results('booking');
    }


}