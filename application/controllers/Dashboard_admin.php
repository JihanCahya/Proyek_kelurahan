<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller
{

	var $module_js = [''];
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
			'select' => 'id_parent,name',
			'from' => 'app_menu',
			'where' => [
				'type' => '2',
				'is_sidebar_menu' => '1'
			]
		];
		$query_sub_menu = [
			'select' => 'id_parent,name,link,icon',
			'from' => 'app_menu',
			'where' => [
				'type' => '3',
				'is_sidebar_menu' => '1'
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
		$this->app_data['get_sub_menu'] = $this->data->get($query_sub_menu)->result();
		$this->app_data['user'] = $this->data->get($user)->row_array();
		$this->load->view('template-admin/start');
		$this->load->view('template-admin/header', $this->app_data);
		$this->load->view('template-admin/sidebar', $this->app_data);
		$this->load->view('menu-admin/dashboard', $this->app_data);
		$this->load->view('template-admin/footer');
		$this->load->view('template-admin/end');
	}
}
