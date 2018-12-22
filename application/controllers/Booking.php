<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('booking');
        $this->load->view('footer');


    }
}
