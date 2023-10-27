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
	}

	private function _init()
	{
		$this->app_data['module_js'] = $this->module_js;
	}

	public function index()
	{
		$this->load->view('template-admin/assets');
		$this->load->view('template-admin/header');
		$this->load->view('menu-admin/dashboard');
		$this->load->view('template-admin/footer');
	}
}
