<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    public function index(){
        $this->load->view('front_page/index');
    }
}