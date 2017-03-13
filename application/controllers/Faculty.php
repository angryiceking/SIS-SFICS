<?php

class Faculty extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Login','Admin_Students_Management']);
	}

	public function index()
	{
		if ($this->session->has_userdata('fa_is_signed') && $this->session->fa_is_signed != null) {
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
				echo "<script>alert('Error! No faculty account was found')</script>";
			}
		}

		$this->display('home/home', null);
	}

	public function validate($user, $pass)
	{
		$faculty = $this->Login->authenticate_faculty($user, $pass);
		if (isset($faculty)) {
			$session_var = [
			'fa_is_signed' => true,
			'fac_id' => $faculty->id,
			'fac_name' => $faculty->fac_fname." ".$faculty->fac_mname." ".$faculty->fac_lname,
			'user' => $faculty->fac_fname." ".$faculty->fac_mname." ".$faculty->fac_lname,
			'nickname' => $faculty->fac_fname,
			'fa_user' => $faculty->username,
			'img' => $faculty->img
			];

			$this->session->set_userdata($session_var);
			redirect('Faculty/Dashboard');
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