<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Genkey extends CI_Controller {
    public function index()
    {
        $this->load->library('encryption');
        $key = bin2hex($this->encryption->create_key(16));
        print_r($key);
    }
}