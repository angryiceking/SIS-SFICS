<?php

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function display($page, $body_data){
		$this->load->view('home/header');
		$this->load->view($page);
		$this->load->view('home/footer');
	}
	public function display_inside($page, $body_data){
		$this->load->view('portal-inside/header', $body_data);
		$this->load->view($page, $body_data);
		$this->load->view('portal-inside/footer');
	}
	public function admin_inside($page, $body_data){
		$this->load->view('admin/header');
		$this->load->view($page, $body_data);
		$this->load->view('admin/footer');
	}
	public function admin($page, $body_data){
		$this->load->view('admin-dash/header');
		$this->load->view($page, $body_data);
		$this->load->view('admin-dash/footer');
	}
	public function faculty($page, $body_data){
		$this->load->view('faculty/header');
		$this->load->view($page, $body_data);
		$this->load->view('faculty/footer');
	}
}