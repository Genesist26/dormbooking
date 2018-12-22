<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    public function index()
    {
        if(isset($_POST['dorm'])){
            $data['message'] = 'We have received your request.';
            $this->load->view('header');
            $this->load->view('message', $data);
            $this->load->view('footer');
            unset($_POST);
        }else{
            $this->load->view('header');
            $this->load->view('setting');
            $this->load->view('footer');
        }

    }
}
