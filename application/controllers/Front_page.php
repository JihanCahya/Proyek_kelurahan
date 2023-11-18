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
    public function district_news(){
        $this->header();
        $this->load->view('front_page/public_information/district_news');
        $this->footer();
    }
    public function detail_news(){
        $this->header();
        $this->load->view('front_page/public_information/detail_news');
        $this->footer();
    }
    public function help_information(){
        $this->header();
        $this->load->view('front_page/public_information/help_information');
        $this->footer();
    }
    public function detail_information(){
        $this->header();
        $this->load->view('front_page/public_information/detail_information');
        $this->footer();
    }
    public function submission_letter(){
        $this->header();
        $this->load->view('front_page/administrative_services/submission_letter');
        $this->footer();
    }
    public function history(){
        $this->header();
        $this->load->view('front_page/administrative_services/history');
        $this->footer();
    }
}