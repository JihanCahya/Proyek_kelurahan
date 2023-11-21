<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $module_js = ['history'];
    var $app_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->_init();
        if (!$this->is_logged_in()) {
            $this->header();
        } else {
            $this->header_1();
        }
    }

    public function is_logged_in()
    {
        return $this->session->userdata('logged_in_1') === TRUE;
    }

    private function _init()
    {
        $this->app_data['module_js'] = $this->module_js;
    }

    public function header()
    {
        $this->load->view('front_page/header', $this->app_data);
    }
    public function header_1()
    {
        $this->load->view('front_page/header_1', $this->app_data);
    }
    public function footer()
    {
        $this->load->view('front_page/footer', $this->app_data);
    }
    public function index()
    {
        $this->load->view('front_page/index', $this->app_data);
        $this->footer();
    }
    public function village_history()
    {
        $this->load->view('front_page/district_profile/village_history');
        $this->footer();
    }
    public function sub_district_structure()
    {
        $this->load->view('front_page/district_profile/sub_district_structure');
        $this->footer();
    }
    public function vission_mission()
    {
        $this->load->view('front_page/district_profile/vission_mission');
        $this->footer();
    }
    public function location_contact()
    {
        $this->load->view('front_page/district_profile/location_contact');
        $this->footer();
    }
    public function district_news()
    {
        $this->load->view('front_page/public_information/district_news');
        $this->footer();
    }
    public function detail_news()
    {

        $this->load->view('front_page/public_information/detail_news');
        $this->footer();
    }
    public function help_information()
    {

        $this->load->view('front_page/public_information/help_information');
        $this->footer();
    }
    public function detail_information()
    {
        $this->load->view('front_page/public_information/detail_information');
        $this->footer();
    }
    public function submission_letter()
    {
        $this->load->view('front_page/administrative_services/submission_letter');
        $this->footer();
    }
    public function history()
    {
        $this->load->view('front_page/administrative_services/history');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }

    public function get_data_history()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['user'] = $this->data->find('st_user', $where)->row_array();
        $query = [
            'select' => 'a.id, a.submit_date, a.status, b.name, c.name as letter_name',
            'from' => 'administration a',
            'join' => [
                'st_user b, b.id = a.id_user',
                'letter c, c.id = a.id_letter'
            ],
            'where' => [
                'a.id_user' => $data['user']['id'],
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }

    public function profile()
    {
        $this->load->view('front_page/profile');
        $this->footer();
    }
    public function letter_1()
    {
        $this->load->view('front_page/administrative_services/letter_1');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }
    public function letter_2()
    {
        $this->load->view('front_page/administrative_services/letter_2');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }
    public function letter_3()
    {
        $this->load->view('front_page/administrative_services/letter_3');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }

    public function insert_1()
    {

    }
}