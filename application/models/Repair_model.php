<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repair_model extends CI_Model {

    public function insert_data($data)
    {
        return $this->db->insert('repair', $data);
    }

    public function get_all_repair()
    {
        if ( empty($this->session->logged_in) ) {
            $this->db->where('username', $this->session->userdata('username'));
        }

        $this->db->order_by('timestamp', 'ASC');
        $query = $this->db->get('repair');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

}