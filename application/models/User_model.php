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

}