<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repair extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        $this->load->model('repair_model');
    }

    public function index()
    {
        if(isset($_POST['subject'])){
            $submit_data['username'] = $this->session->userdata('username');
            $submit_data['subject'] = $this->input->post('subject', TRUE);
            $submit_data['room'] = $this->input->post('room', TRUE);
            $submit_data['object'] = $this->input->post('object', TRUE);
            $submit_data['detail'] = $this->input->post('detail', TRUE);
            unset($_POST);

            $this->repair_model->insert_data($submit_data);

            $data['message'] = 'We have received your request.';
            $this->load->view('header');
            $this->load->view('message', $data);
            $this->load->view('footer');
        }else{
            $this->load->view('header');
            $this->load->view('Repair');
            $this->load->view('footer');
        }

//        $this->load->view('welcome_message');


//        // Load model post_model.php
//        $this->load->model('post_model');
//
//        // $data['posts'] = $this->post_model->get_all_posts();
//
//        // Load pagination library
//        $this->load->library('pagination');
//        // init params
//        $limit_per_page = 3;
//        $start_index = $this->uri->segment(3) ? $this->uri->segment(3) : 0 ;
//        $total_records = $this->post_model->get_no_of_data();
//
//        if ($total_records > 0) {
//            // get current page records
//            $data['posts'] = $this->post_model->show_post_pagination($limit_per_page, $start_index);
//
//            $config['base_url'] = base_url('/main/index/');
//            $config['total_rows'] = $total_records;
//            $config['per_page'] = $limit_per_page;
//            $this->pagination->initialize($config);
//            $data['pagination_link'] = $this->pagination->create_links();
//        }
//
//        $this->load->view('header');
//        $this->load->view('content', $data);
//        $this->load->view('footer');

    }
}
