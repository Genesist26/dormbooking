<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('admin_dashboard_view');
        $this->load->view('footer');


    }
}
