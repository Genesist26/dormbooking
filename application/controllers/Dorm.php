<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dorm extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Load url helper
        $this->load->helper('url');
        $this->load->model('dorm_list_model');
        $this->load->model('resident_model');
        $this->load->model('dorm_model');
    }

    public function index()
    {
        $this->load->view('header');
        if(isset($_POST['new_dorm'])){      // add form
            $submit_data['dorm'] = $this->input->post('new_dorm', TRUE);
            $submit_data['max_floor'] = $this->input->post('max_floor', TRUE);
            $submit_data['max_room'] = $this->input->post('max_room', TRUE);
            $submit_data['max_res'] = $this->input->post('max_resident', TRUE);
            $submit_data['exclude1st'] = isset($_POST['exclude_1st'])?1:0;
            $submit_data['status'] = '1';

            // add to dorm_list table
            $this->dorm_list_model->insert_data($submit_data);

            //add to resident table
            if(isset($_POST['exclude_1st'])){
                $this->dorm_model->insert_data($submit_data, TRUE);
            }else{
                $this->dorm_model->insert_data($submit_data, FALSE);
            }


        }elseif(isset($_POST['remv_dorm'])){        // remove form
            $remv_dorm = $this->input->post('remv_dorm', TRUE);
            $remv_room = $this->input->post('remv_room', TRUE);

            if(isset($_POST['all_room'])){          // remove all room (whole dorm)
                $this->dorm_list_model->remove_the_dorm($remv_dorm);
                $this->dorm_model->remove_the_dorm($remv_dorm);
            }else{                                  // remove specificroom
                $this->dorm_model->remove_the_room($remv_dorm, $remv_room);
            }
        }else{
            $this->load->view('manage_dorm');
        }
        $this->load->view('footer');


    }
}
