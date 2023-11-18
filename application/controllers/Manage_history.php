<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_history extends CI_Controller
{
    var $module_js = ['manage-history'];
    var $app_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->_init();
        if (!$this->is_logged_in()) {
            redirect('admin');
        }
    }

    public function is_logged_in()
    {
        return $this->session->userdata('logged_in') === TRUE;
    }

    private function _init()
    {
        $this->app_data['module_js'] = $this->module_js;
    }

    public function index()
    {
        $query_menu = [
            'select' => 'id_parent,name, icon, link, type, is_admin',
            'from' => 'app_menu',
            'where' => [
                'is_admin' => '1'
            ]
        ];

        $query_dropdown = [
            'select' => 'id_parent,name,link,icon, type, is_admin',
            'from' => 'app_menu',
            'where' => [
                'type' => '2',
                'is_admin' => '1'
            ]
        ];

        $query_child = [
            'select' => 'id_parent,name,link,icon, type, is_admin',
            'from' => 'app_menu',
            'where' => [
                'type' => '3',
                'is_admin' => '1'
            ]
        ];

        $user = [
            'select' => 'a.id, a.name, a.email, a.image, a.phone_number, a.address, b.name as akses',
            'from' => 'st_user a',
            'join' => [
                'app_credential b, b.id = a.id_credential'
            ],
            'where' => [
                'a.is_deleted' => '0',
                'a.email' => $this->session->userdata('email')
            ]
        ];
        $this->app_data['get_menu'] = $this->data->get($query_menu)->result();
        $this->app_data['get_dropdown'] = $this->data->get($query_dropdown)->result();
        $this->app_data['get_child'] = $this->data->get($query_child)->result();
        $this->app_data['user'] = $this->data->get($user)->row_array();
        $this->load->view('template-admin/start');
        $this->load->view('template-admin/header', $this->app_data);
        $this->load->view('menu-admin/manage_history');
        $this->load->view('template-admin/footer');
        $this->load->view('template-admin/end');
        $this->load->view('js-custom', $this->app_data);
    }

    public function get_data()
    {
        $query = [
            'select' => 'a.id, a.submit_date, a.finish_date, b.name, c.name as letter_name',
            'from' => 'administration a',
            'join' => [
                'st_user b, b.id = a.id_user',
                'letter c, c.id = a.id_letter'
            ],
            'where' => [
                'a.status' => '3',
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }
    public function get_data_filter()
    {
        $date1 = $this->input->post('date1');
        $date2 = $this->input->post('date2');

        $query = "SELECT a.id, a.submit_date, a.finish_date, b.name, c.name AS letter_name 
                FROM administration a, st_user b, letter c
                WHERE a.id_user = b.id AND
                a.id_letter = c.id AND
                STATUS = '3' AND
                submit_date BETWEEN ? AND ?";

        $result = $this->data->custom($query, array($date1, $date2))->result();
        echo json_encode($result);
    }
    public function get_data_id()
    {
        $id = $this->input->post('id');
        $query = [
            'select' => 'a.id, a.file_name, a.submit_date, a.finish_date, b.name, c.name as letter_name',
            'from' => 'administration a',
            'join' => [
                'st_user b, b.id = a.id_user',
                'letter c, c.id = a.id_letter'
            ],
            'where' => [
                'a.id' => $id,
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }
}