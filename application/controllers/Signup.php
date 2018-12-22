<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Load form and url helper
        $this->load->helper('url');
        $this->load->helper(array('form','url'));
    }

    public function index()
    {
        // Load form validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required|callback_check_database');

        if(isset($_POST['username'])){
            $submit_data['username'] = $this->input->post('username', TRUE);
            $submit_data['password'] = $this->input->post('password', TRUE);
            $submit_data['question'] = $this->input->post('question', TRUE);
            $submit_data['answer']   = $this->input->post('answer', TRUE);
            unset($_POST);

            $this->load->model('user_model');

            $this->user_model->insert_data($submit_data);

            $data['message'] = 'Signup completed';
            $this->load->view('header');
            $this->load->view('message', $data);
            $this->load->view('footer');

            echo "<script>setTimeout(\"location.href = 'login';\",2500);</script>";

        }
        else{
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('form_signup');
                $this->load->view('footer');
            }
            else {
                redirect('main', 'refresh');
            }
        }

    }
}