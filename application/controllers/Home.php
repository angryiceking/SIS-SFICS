<?php

class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Login', 'Admin_Students_Management']);
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

		$data = [
		'news' => $this->Admin_Students_Management->get_news(),
		'video' => $this->Login->get_vid(), 
		];
		$this->display('home/home', $data);
	}

	public function validate($user, $pass)
	{
		$student = $this->Login->authenticate($user, $pass);
		if (isset($student)) {
			$session_var = [
			'is_signed' => true,
			'id' => $student->student_id,
			'user' => $student->lname.", ".$student->fname." ".$student->mname,
			'name' => $student->lname.", ".$student->fname." ".$student->mname,
			'nickname' => $student->fname,
			'img' => $student->img
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

	public function Courses()
	{
		$data = [
		'courses' => $this->Admin_Students_Management->get_courses(),
		'news' => $this->Admin_Students_Management->get_news()
		];
		$this->display('home/courses', $data);
	}

	public function signup()
	{
		$data = [
		'sections' => $this->Admin_Students_Management->get_sections(),
		];
		$this->display('home/sign_up', $data);	
	}

	public function create_unverified_stud()
	{
		$name = $this->input->post('lname');
		$contact = $this->input->post('contact');

		$username = strtolower($name."-".date('Y')."-".strrev(substr($contact, 4, 3)));
		$studnum = strtoupper($name."-".date('Y')."-0xxx");

		$class = $this->input->post('section');

		$course_id = $class[0];
		$year_id = $class[1];
		$section_id = $class[2];

		$data = [
		'studnum' => $studnum,
		'username' => $username,
		'password' => '42fs4g1x',
		'email' => $this->input->post('email'),
		'fname' => $this->input->post('fname'),
		'mname' => $this->input->post('mname'),		
		'lname' => $this->input->post('lname'),
		'age' => $this->input->post('age'),
		'contact' => $this->input->post('contact'),
		'address' => $this->input->post('address'),
		'stud_year_id' => $year_id,
		'section_id' => $section_id,
		'course_id' => $course_id,
		'status' => 'unverified'
		];

		$this->Admin_Students_Management->create_stud($data);
		redirect('Home/Signup');
	}

	public function premises()
	{
		$data = [
		'courses' => $this->Admin_Students_Management->get_courses(),
		'news' => $this->Admin_Students_Management->get_news()
		];
		
		$this->display('home/premises', $data);	
	}
}