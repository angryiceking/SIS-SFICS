<?php

class Student extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Admin_Students_Management', 'Student_Model']);
	}

	public function home()
	{
		if (!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE) {
			redirect('/');
		}

		$data = [
		'news' => $this->Admin_Students_Management->get_news()
		];

		$this->display_inside('portal-inside/index', $data);
	}

	public function myacc()
	{
		if (!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE) {
			redirect('/');
		}

		$data = [
		'profile' => $this->Admin_Students_Management->get_stud_by_id($this->session->id)
		];

		$this->display_inside('portal-inside/myaccount', $data);
	}

	public function edit()
	{
		$data = [
		'id' => $this->input->post('id'),
		'password' => $this->input->post('password'),
		'age' => $this->input->post('age'),
		'address' => $this->input->post('address')
		];

		$this->Student_Model->edit($data);
 
		redirect(base_url().'Student/Profile');
	}
}