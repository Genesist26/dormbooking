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
        $this->load->view('header');

        if($this->session->userdata('username') == 'admin'){
            $data['queue'] = $this->repair_model->get_all_queue();

            $this->load->view('manage_repair', $data);
        }else{
            if(isset($_POST['subject'])){
                $submit_data['username'] = $this->session->userdata('username');
                $submit_data['subject'] = $this->input->post('subject', TRUE);
                $submit_data['room'] = $this->input->post('room', TRUE);
                $submit_data['object'] = $this->input->post('object', TRUE);
                $submit_data['detail'] = $this->input->post('detail', TRUE);
                $submit_data['status'] = '0';
                unset($_POST);

                $this->repair_model->insert_data($submit_data);

                $data['message'] = 'We have received your request.';

                $this->load->view('message', $data);
            }else{
                $this->load->view('form_repair');

            }
        }
        $this->load->view('footer');

    }
}
