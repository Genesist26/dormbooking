<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dorm extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        $this->load->model('booking_model');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('manage_dorm');
        $this->load->view('footer');


    }
}
