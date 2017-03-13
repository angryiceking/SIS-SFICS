<?php
class AssignersClass extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Admin_Students_Management', 'Admin_Faculty_Management', 'My_Custom_Model']);
	}

	public function send()
	{
		$data = [
			'user' => $this->session->user,
			'nickname' => $this->session->nickname,
			'time' => date('h:i:s'),
			'message' => $this->input->post('message'),
			'img' => $this->session->img
		];

		$this->My_Custom_Model->send_message($data);
	}

	public function get_messages()
	{
		$data = [
			'messages' => $this->My_Custom_Model->get_messages()
		];

		$this->load->view('portal-inside/messages', $data);
	}

	public function show_classes()
	{

	}

	public function add_course()
	{

	}

	public function edit_course()
	{

	}

	public function show_courses()
	{

	}	

}