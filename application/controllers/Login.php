<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Load form and url helper
        $this->load->helper(array('form','url'));
    }

    public function index()
    {
        // Load form validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required|callback_check_database');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header');
            $this->load->view('content');
            $this->load->view('form_login');
            $this->load->view('footer');
        }
        else
        {
            redirect('main', 'refresh');
        }
    }

    public function check_database($password)
    {
        if (empty($password)) {
            $this->form_validation->set_message('check_database', 'The Password field is required.');
            return FALSE;
        }

        // Load post_model.php
        $this->load->model('user_model');

        $username = $this->input->post('username');


        if ($this->user_model->login($username, $password))
        {
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('logged_in','1');
            return TRUE;
        }
        $this->form_validation->set_message('check_database', 'Invalid username or password.');
        return FALSE;
    }

}