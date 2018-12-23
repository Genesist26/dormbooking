<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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

        if($this->session->userdata('username') == 'admin'){
            $data['queue'] = $this->booking_model->get_all_queue();
            $this->load->view('manage_booking', $data);
        }
        else{
            $isBooking = $this->booking_model->have_an_booking();
            if($isBooking){
                $data['message'] = 'Your booking is in proceed.';
                $this->load->view('message', $data);
            }else{
                if(isset($_POST['dorm'])){
                    $submit_data['username'] = $this->session->userdata('username');
                    $submit_data['dorm']  = $this->input->post('dorm', TRUE);
                    $submit_data['checkin_due']  = $this->input->post('checkin_due', TRUE);
                    $submit_data['mate_1']     = $this->input->post('mate_1', TRUE);
                    $submit_data['mate_2']   = $this->input->post('mate_2', TRUE);
                    $submit_data['mate_3']   = $this->input->post('mate_3', TRUE);
                    $submit_data['status']   = '0';
                    unset($_POST);

                    $this->booking_model->insert_data($submit_data);

                    $data['message'] = 'We have received your request.';
                    $this->load->view('message', $data);
                    unset($_POST);
                }else{
                    $this->load->view('form_booking');
                }
            }
        }
        $this->load->view('footer');


    }
}
