<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dorm_model extends CI_Model {

    public function insert_data($data, $exclude1st)
    {
        $f_default = 2;

        if(! $exclude1st){
            $f_default = 1;
        }

        for($f=$f_default; $f<=$data['max_floor']; $f++){
            for($r=1; $r<=$data['max_room']; $r++){
                $data_dorm['dorm'] = $data['dorm'];
                $data_dorm['room'] = str_pad($r, 3, '0', STR_PAD_LEFT);
                $data_dorm['id_member_1'] = '';
                $data_dorm['id_member_2'] = '';
                $data_dorm['id_member_3'] = '';
                $data_dorm['id_member_4'] = '';
                $this->db->insert('dorm', $data_dorm);
            }
        }

//        return $this->db->insert('dorm', $data);

    }

    public function remove_the_dorm($data){
        $this->db->where('dorm', $data);
        return $this->db->delete('dorm');
    }

    public function remove_the_room($dorm, $room){
        $this->db->where('dorm', $dorm);
        $this->db->where('room', $room);
        return $this->db->delete('dorm');
    }

}