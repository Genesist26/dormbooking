<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        $this->load->model('resident_model');
        $this->load->model('booking_model');
    }

    public function index()
    {
        $this->load->view('header');
        $in_dorm = $this->resident_model->is_in_dorm();
        if($in_dorm){   // in dorm
            if($this->resident_model->get_no_of_data() > 0){
                $data['information'] = $this->resident_model->get_all_information();
                $this->load->view('information', $data);
            }
        }
        else{           // no dorm

            if($this->booking_model->have_an_booking()){     // have a booking
                $data['message'] = 'Waiting for confirmation';
            }else {                                          // no a booking
                $data['message'] = 'You need to booking a dorm first';
            }
            $this->load->view('message', $data);
        }
        $this->load->view('footer');

    }
}
