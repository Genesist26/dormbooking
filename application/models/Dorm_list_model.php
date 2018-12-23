<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dorm_list_model extends CI_Model {

    public function insert_data($data)
    {
        return $this->db->insert('dorm_list', $data);
//
//        $f_default = 2;
//
//        if(! $exclude1st){
//            $f_default = 1;
//            echo '222';
//        }
//
//        for($f=$f_default; $f<=$data['max_floor']; $f++){
//            for($r=1; $r<=$data['max_room']; $r++){
//                echo $f.''.str_pad($r, 2, '0', STR_PAD_LEFT).'<br>';
//            }
//        }

//        return $this->db->insert('dorm_list', $data);

    }

    public function remove_the_dorm($data){
        $this->db->where('dorm', $data);
        return $this->db->delete('dorm_list');
    }



}