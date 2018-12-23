<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Load url helper
        $this->load->helper('url');
        $this->load->model('contact_model');
    }

    public function index()
    {
        if(isset($_POST['subject'])){
            $this->add_date();
            $data['message'] = 'We have received your request.';
            $this->load->view('header');
            $this->load->view('message', $data);
            $this->load->view('footer');
            unset($_POST);
        }else{
            $this->load->view('header');
            $this->load->view('contact');
            $this->load->view('footer');
        }
    }

    public function add_date(){
        $submit_data['username'] = $this->session->userdata('username');
        $submit_data['subject']  = $this->input->post('subject', TRUE);
        $submit_data['detail']   = $this->input->post('detail', TRUE);
        unset($_POST);

        $this->contact_model->insert_data($submit_data);
    }
}
