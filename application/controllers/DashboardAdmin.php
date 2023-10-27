<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller
{

	public function index()
	{
		$this->load->view('template-admin/header');
		$this->load->view('menu-admin/dashboard');
		$this->load->view('template-admin/footer');
	}
}
