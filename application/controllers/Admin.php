<?php

class Admin extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Login','Admin_Students_Management']);
	}

	public function LoginUI()
	{
		$this->load->view('admin-dash/loginui');
	}

	public function index()
	{
		if ($this->session->has_userdata('ad_is_signed') && $this->session->ad_is_signed != null) {
			// if there's a session redirect to
			redirect('/Admin/Dashboard');
		}
		elseif ($this->session->has_userdata('is_signed') && $this->session->is_signed != null) {
			// if there's a session redirect to
			echo "<script>alert('Error! Please logout your student account.')</script>";
			redirect('/Admin');
		}
		$usr = $this->input->post('username');
		$pss = $this->input->post('password');

		if ($usr != null && $pss != null) {
			$var = $this->validate($usr, $pss);
			if ($var = 'Error') {
				echo "<script>alert('Error! No admin account was found')</script>";
			}
		}

		$this->display('home/home', null);
	}

	public function validate($user, $pass)
	{
		$student = $this->Login->authenticate_admin($user, $pass);
		if (isset($student)) {
			$session_var = [
			'ad_is_signed' => true,
			'ad_user' => $student->username
			];

			$this->session->set_userdata($session_var);
			redirect('/Admin/Dashboard');
		}

		$err = 'Error';
		return $err;
	}

	public function test()
	{
		$data = [
		'students' => $this->Admin_Students_Management->get_stud(),
		'news' => $this->Admin_Students_Management->get_news()
		];
		$this->admin('admin-dash/dashboard', $data);
	}
}