<?php

class Student extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Admin_Students_Management', 'Student_Model', 'My_Custom_Model']);
	}

	public function home()
	{
		if (!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE) {
			redirect('/');
		}

		$data = [
		'news' => $this->Admin_Students_Management->get_news(),
		'student' => $this->Admin_Students_Management->get_stud_by_id($this->session->id)
		];

		$this->display_inside('portal-inside/index', $data);
	}

	public function Test()
	{
		var_dump($this->session->userdata()); exit();
	}

	public function myacc()
	{
		if (!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE) {
			redirect('/');
		}

		$data = [
		'student' => $this->Admin_Students_Management->get_stud_by_id($this->session->id),
		'profile' => $this->Admin_Students_Management->get_student($this->session->id)
		];

		$this->display_inside('portal-inside/myaccount', $data);
	}

	public function Grades()
	{
		$data = [
		'student' => $this->Admin_Students_Management->get_stud_by_id($this->session->id),
		'grades' => $this->Admin_Students_Management->get_grades_by_stud($this->session->id)
		];

		// var_dump($data['grades']->result()); exit();
		$this->display_inside('portal-inside/grades', $data);
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

	public function UploadPic()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10000;
		$config['max_width'] = 4296;
		$config['max_height'] = 3272;		
		$this->load->library('upload', $config);

		$image = 'userfile';

		if (!$this->upload->do_upload($image)) {
			$error = $this->upload->display_errors();
			echo "<script>alert('".$error."!');window.location.href='/student-portal/Student/Profile';</script>";
		}
		else
		{
			$data = [
			'upload_data' => $this->upload->data(),
			];
			$img = $data['upload_data']['file_name'];

			$add = array(
				'img' => $img,
				'student_id' => $this->session->id,
				);

			$this->Admin_Students_Management->upload($add);
		}

		return $this->my_acc();
	}
	public function print_pdf()
	{
		$pdfFilePath = "/assets/filename.pdf";

		$data = [
		'student' => $this->Admin_Students_Management->get_stud_by_id($this->session->id),
		'grades' => $this->Admin_Students_Management->get_grades_by_stud($this->session->id)
		];

		if (file_exists($pdfFilePath) == FALSE) {

			$html = $this->load->view('admin-dash/get_student_subjects', $data, true);

			$this->load->library('pdflib');
			$pdf = $this->pdflib->load();

			$pdf->WriteHTML($html); 
			$pdf->Output(FCPATH.$pdfFilePath, 'F'); 
		}
		redirect($pdfFilePath);
	}

	public function Messaging()
	{
		$data = [
		'student' => $this->Admin_Students_Management->get_stud_by_id($this->session->id),
		'grades' => $this->Admin_Students_Management->get_grades_by_stud($this->session->id),
		'faculty' => $this->Admin_Students_Management->get_faculty(),
		'chats' => $this->Student_Model->get_latest_chat($this->session->id)
		];
		$this->display_inside('portal-inside/messaging', $data);
	}

	public function Send()
	{
		$data = [
		'message' => $this->input->post('message'),
		'faculty_rec_id' => $this->input->post('faculty'),
		'time' => date('Y-m-d h:m:s'),
		'sender_id' => $this->session->id,
		'type' => "student",
		];
		$this->Student_Model->insert_chat($data);

		return redirect('Student/Messaging');
	}
	public function ReadNews($id)
	{
		$data = [
		'student' => $this->Admin_Students_Management->get_stud_by_id($this->session->id),
		'curnews' => $this->My_Custom_Model->get_news($id),
		];

		$this->display_inside('portal-inside/readcurnews', $data);
	}
}