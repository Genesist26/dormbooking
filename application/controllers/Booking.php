<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        $this->load->model('booking_model');
        $this->load->model('dorm_list_model');
        $this->load->model('resident_model');
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
                    $submit_data['dorm'] = $this->input->post('dorm', TRUE);
                    $submit_data['checkin_due'] = $this->input->post('checkin_due', TRUE);
                    $submit_data['mate_1'] = $this->input->post('mate_1', TRUE);
                    $submit_data['mate_2'] = $this->input->post('mate_2', TRUE);
                    $submit_data['mate_3'] = $this->input->post('mate_3', TRUE);
                    $submit_data['status'] = '1';
                    unset($_POST);

                    $this->booking_model->insert_data($submit_data);

                    $data['message'] = 'We have received your request.';
                    $this->load->view('message', $data);
                    unset($_POST);
                }else{
                    $data['dorm_list'] = $this->dorm_list_model->get_dorm_list();
//                    $this->load->view('form_booking');
//                    var_dump($data['dorm_list']);
                    $this->load->view('form_booking', $data);
                    echo '222';
//                    var_dump($data);
                }
            }
        }
        $this->load->view('footer');
    }

    public function update_queue_status($queue_id){
        $success = $this->booking_model->update_status($queue_id);
        if($success){
            $this->checkin($queue_id);
            echo 'checkin completed<br>';
        }else{
            echo 'checkin not complete<br>';
        }
        redirect('booking','refresh');
    }

    public function checkin($queue_id){
        $data = $this->booking_model->get_a_queue($queue_id);
        foreach ($data as $item){
            $booking_data['username'] = $item['username'];
            $booking_data['dorm'] = $item['dorm'];
            $booking_data['room'] = '310';
            $booking_data['checkin'] = $item['checkin_due'];
            $booking_data['checkout_due'] = $item['checkin_due'];
            $booking_data['status'] = '0';
        }

        $this->resident_model->insert_data($booking_data);

    }
}
