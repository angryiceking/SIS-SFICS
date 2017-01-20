<?php

class Admin_Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Students_Management');
	}
	public function index()
	{
		if (!$this->session->has_userdata('ad_is_signed') && $this->session->ad_is_signed != TRUE) {
			redirect('/');
		}


		$data = [
		'students' => $this->Admin_Students_Management->get_stud(),
		'news' => $this->Admin_Students_Management->get_news()
		];

		$this->admin('admin-dash/dashboard', $data);
	}

	public function create_stud()
	{
		$name = $this->input->post('lname');
		$contact = $this->input->post('contact');

		$username = strtolower($name."-".date('Y')."-".strrev(substr($contact, 4, 3)));
		$studnum = strtoupper($name."-".date('Y')."-0xxx");

		$data = [
		'studnum' => $studnum,
		'username' => $username,
		'password' => 'xxxxx',
		'fname' => $this->input->post('fname'),
		'mname' => $this->input->post('mname'),
		'lname' => $this->input->post('lname'),
		'age' => $this->input->post('age'),
		'contact' => $this->input->post('contact'),
		'address' => $this->input->post('address'),
		'status' => 'active'
		];

		$this->Admin_Students_Management->create_stud($data);

		redirect('Admin/Dashboard');
	}

	public function upload_news()
	{
		$config['upload_path'] = './assets/news/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10000;
		$config['max_width'] = 4296;
		$config['max_height'] = 3272;		
		$this->load->library('upload', $config);

		$image = 'userfile';

		if ($this->input->post('desc') != null) {
			if (!$this->upload->do_upload($image)) {
				$error = $this->upload->display_errors();
				echo "<script>alert('".$error."!');window.location.href='/student-portal/Admin/Dashboard';</script>";
			}
			else
			{
				$data = [
				'upload_data' => $this->upload->data(),
				];
				$img = $data['upload_data']['file_name'];

				$add = array(
					'img' => $img,
					'desc' =>$this->input->post('desc'),
					);

				$this->Admin_Students_Management->publish($add);

				echo "<script>alert('Successfully published!');window.location.href='/student-portal/Admin/Dashboard';</script>";	
			}
		}
	}

	public function Manual()
	{
		$this->admin_inside('admin/manual', null);
	}
	public function Changelogs()
	{
		$this->admin_inside('admin/changelogs', null);
	}
}