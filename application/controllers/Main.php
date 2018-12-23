<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('header');
        if ( $this->session->logged_in ){
            if($this->session->userdata('username') == 'admin'){
                $this->load->model('repair_model');
                $this->load->model('booking_model');
                $this->load->model('contact_model');

                $noti_no['no_of_repair']   = $this->repair_model->get_no_of_noti();
                $noti_no['no_of_booking'] = $this->booking_model->get_no_of_noti();
                $noti_no['no_of_contact'] = $this->contact_model->get_no_of_noti();

                $this->load->view('admin_dashboard', $noti_no);
            }else{
                $this->load->view('user_dashboard');
            }
        }else{
            $this->load->view('content');
        }
        $this->load->view('footer');
    }

    public function get_admin_data_for_dashboard(){

    }


}
