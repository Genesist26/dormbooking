<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Load url helper
        $this->load->helper('url');
        $this->load->model('contact_model');
    }

    public function index()
    {
        $this->load->view('header');
        if($this->session->userdata('username') == 'admin'){
            $data['queue'] = $this->contact_model->get_all_queue();

            $this->load->view('manage_contact', $data);
        }
        else{
            if(isset($_POST['subject'])){
                $this->add_date();
                $data['message'] = 'We have received your contact message.';

                $this->load->view('message', $data);
                unset($_POST);
            }else{
                $this->load->view('form_contact');

            }
        }
        $this->load->view('footer');

    }

    public function add_date(){
        $submit_data['username'] = $this->session->userdata('username');
        $submit_data['subject']  = $this->input->post('subject', TRUE);
        $submit_data['detail']   = $this->input->post('detail', TRUE);
        $submit_data['status']   = '0';
        unset($_POST);

        $this->contact_model->insert_data($submit_data);
    }

    public function update_queue_status($queue_id){
        $this->contact_model->update_status($queue_id);
        redirect('contact','refresh');
    }
}
