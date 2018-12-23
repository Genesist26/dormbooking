<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        $this->load->model('user_model');
    }

    public function index()
    {
        $this->load->view('header');
        if(isset($_POST['password'])){
            $is_change = $this->user_model->change_password($_POST['answer'], $_POST['password']);
            if($is_change){
                $data['message'] = 'Your password has been changed';
            }
            else{
                $data['message'] = 'Your password not change. Incorrect answer';
            }
            $this->load->view('message', $data);

            unset($_POST);
        }else{
            $data['setting'] = $this->user_model->get_setting();
            $this->load->view('user_setting', $data);

        }
        $this->load->view('footer');

    }

}
