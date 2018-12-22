<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function insert_data($data)
    {
        return $this->db->insert('post', $data);
    }

    public function get_all_posts()
    {
        if ( empty($this->session->logged_in) ) {
            $this->db->where('status', 'public');
        }

        $this->db->order_by('sticky', 'DESC');
        $this->db->order_by('timestamp', 'DESC');
        $query = $this->db->get('post');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function get_post($post_id)
    {
        $this->db->where('post_id', $post_id);
        $query = $this->db->get('post');
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            return $data;
        }
        return FALSE;
    }

    public function update_post($post_id, $data)
    {
        $this->db->where('post_id', $post_id);
        return $this->db->update('post', $data);
    }

    public function delete_post($post_id)
    {
        $this->db->where('post_id', $post_id);
        return $this->db->delete('post');
    }

    public function show_post_pagination($limit, $start)
    {
        if ( empty($this->session->logged_in) ) {
            $this->db->where('status', 'public');
        }
        $this->db->limit($limit, $start);
        $this->db->order_by('sticky', 'DESC');
        $this->db->order_by('timestamp', 'DESC');
        $query = $this->db->get('post');

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
        if ( empty($this->session->logged_in) ) {
            $this->db->where('status', 'public');
        }
        return $this->db->count_all_results('post');
    }

}