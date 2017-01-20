<?php

class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login');
	}

	public function index()
	{
		if ($this->session->has_userdata('is_signed') && $this->session->is_signed != null) {
			// if there's a session redirect to
			redirect('/Student');
		}
		$usr = $this->input->post('username');
		$pss = $this->input->post('password');

		if ($usr != null && $pss != null) {
			$var = $this->validate($usr, $pss);
			if ($var = 'Error') {
				echo "<script>alert('Error! no user was found')</script>";
			}
		}

		$this->display('home/home', null);
	}

	public function validate($user, $pass)
	{
		$student = $this->Login->authenticate($user, $pass);
		if (isset($student)) {
			$session_var = [
			'is_signed' => true,
			'id' => $student->id,
			'user' => $student->username
			];

			$this->session->set_userdata($session_var);
			redirect('/Student');
		}

		$err = 'Error';
		return $err;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function test()
	{
		var_dump($this->session->userdata());
	}
}