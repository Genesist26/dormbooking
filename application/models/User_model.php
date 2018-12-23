<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0)
        {
            $row = $query->row();
            $hash = $row->password;
            if ($password == $hash) {
                return $row->username;
            }
        }
        return FALSE;
    }

    public function add_new_user($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0)
        {
            $row = $query->row();
            $hash = $row->password;
            if ($password == $hash) {
                return $row->username;
            }
        }
        return FALSE;
    }

    public function insert_data($data)
    {
        return $this->db->insert('user', $data);
    }

    public function get_setting()
    {
        $this->db->select('username');
        $this->db->select('question');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user');

        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function change_password($answer, $new_password)
    {
        $right_answer = $this->is_right_answer($answer);
        if($right_answer){
            $this->db->set('password', $new_password, FALSE);
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('	user');
            return TRUE;
        }
        return FALSE;
    }

    public function is_right_answer($data)
    {
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->where('answer', $data);
        return $this->db->count_all_results('user')?1:0;

    }

}