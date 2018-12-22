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

//    public function insert_data($username, $password, $question, $answer)
//    {
//        return $this->db->insert('user', $username, $password, $question, $answer);
//    }
    public function insert_data($data)
    {
        return $this->db->insert('user', $data);
    }

}