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

    public function get_all_queue(){
        $this->db->where('status', '0');
        $this->db->order_by('timestamp', 'DEC');
        $query = $this->db->get('contact');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function update_status($id){
        $this->db->set('status', '1', FALSE);
        $this->db->where('id', $id);
        $this->db->update('	contact');
        return TRUE;
    }
}