<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $module_js = ['message'];
    var $app_data = [];
    public function header(){
        $this->load->view('front_page/header', $this->app_data);
    }
    public function footer(){
        $this->load->view('front_page/footer', $this->app_data);
    }
    public function index(){
        $this->header();
        $this->load->view('front_page/index', $this->app_data);
        $this->footer();
    }
    public function login() {
        $this->load->view('front_page/auth/login');
    }
}