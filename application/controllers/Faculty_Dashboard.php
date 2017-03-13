<?php

class Faculty_Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Admin_Faculty_Management', 'Admin_Students_Management', 'My_Custom_Model']);
	}
	public function index()
	{
		if (!$this->session->has_userdata('fa_is_signed') && $this->session->fa_is_signed != TRUE) {
			redirect('/');
		}
		
		$data = [
		'students' => $this->Admin_Students_Management->get_studs(),
		'news' => $this->Admin_Students_Management->get_news(),
		'courses' => $this->Admin_Faculty_Management->get_my_courses($this->session->fac_id),
		'grades' => $this->Admin_Faculty_Management->get_grade_status($this->session->fac_id),
		'__grades' => $this->Admin_Faculty_Management->get_faculty_grades($this->session->fac_id),
		'validation' => $this->My_Custom_Model->validate_fac($this->session->fac_id),
		'subjects' => $this->My_Custom_Model->faculty_subject($this->session->fac_id)
		];

		$this->faculty('faculty/home', $data);
	}

	public function show_subject_students($subject_id)
	{
		$data = [
		'courses' => $this->Admin_Faculty_Management->get_my_courses_by_fac_id($this->session->fac_id, $subject_id),
		'__grades' => $this->Admin_Faculty_Management->get_faculty_grades($this->session->fac_id),
		'validation' => $this->My_Custom_Model->validate_fac($this->session->fac_id),
		'grades' => $this->Admin_Faculty_Management->get_grade_status($this->session->fac_id),
		];

		$this->faculty('faculty/mysubjects_students', $data);
	}

	public function show_subject_section_students($subject_id)
	{
		$data = [
		'courses' => $this->Admin_Faculty_Management->get_my_courses_by_fac_id($this->session->fac_id, $subject_id),
		'__grades' => $this->Admin_Faculty_Management->get_faculty_grades($this->session->fac_id),
		'validation' => $this->My_Custom_Model->validate_fac($this->session->fac_id),
		'grades' => $this->Admin_Faculty_Management->get_grade_status($this->session->fac_id),
		];

		$this->faculty('faculty/mysubjects_students', $data);
	}

	public function Messaging()
	{
		$data = [
		'students' => $this->Admin_Students_Management->get_studs(),
		'news' => $this->Admin_Students_Management->get_news(),
		'courses' => $this->Admin_Faculty_Management->get_my_courses($this->session->fac_id),
		'chats' => $this->Admin_Faculty_Management->get_latest_chat($this->session->fac_id)
		];

		$this->faculty('faculty/messaging', $data);
	}

	public function Send()
	{
		$data = [
		'message' => $this->input->post('message'),
		'sender_id' => $this->input->post('faculty'),
		'time' => date('Y-m-d h:m:s'),
		'faculty_rec_id' => $this->session->fac_id,
		'type' => "faculty"
		];
		$this->Admin_Faculty_Management->insert_chat($data);

		return redirect('Faculty/Messaging');
	}

	public function EncodeGrade($id, $subj_id)
	{
		$data = [
		'student' => $this->Admin_Faculty_Management->get_student_by_id($this->session->fac_id, $id, $subj_id)
		];
		$this->faculty('faculty/grade_encoder/encode_grade', $data);
	}

	public function EncodeGrade_Submitted()
	{
		$data = [
		$this->input->post('grade_type') => $this->input->post('grade'),
		'graded_subject_id' => $this->input->post('subject_id'),
		'fac_id' => $this->session->fac_id,
		'graded_student_id' => $this->input->post('student_id'),
		];


		$this->Admin_Faculty_Management->insert_grade($data);
		return redirect('Faculty/MySubject/'.$this->input->post('subject_id'));	
	}

	public function Manual()
	{
		$this->admin_inside('admin/manual', null);
	}
	public function Changelogs()
	{
		$this->admin_inside('admin/changelogs', null);
	}

	public function ValidateGrades($id)
	{
		$data = [
		'id' => $id,
		'status' => 'submitted'
		];
		$this->My_Custom_Model->submit_validation($data);
		return redirect('Faculty/Dashboard');
	}

	public function AverageGrade($prelim, $midterm, $prefinals, $finals, $subject_id, $student_id)
	{
		$total = $prelim + $midterm + $prefinals + $finals ;
		$ave = $total/4;

		$data = [
		'final_grade' => $ave,
		'graded_subject_id' => $subject_id,
		'fac_id' => $this->session->fac_id,
		'graded_student_id' => $student_id
		];


		$this->My_Custom_Model->insert_ave($data);
		return redirect('Faculty/MySubject'.$subject_id);

	}

	public function ExportCSV()
	{
		$data = [
		'courses' => $this->Admin_Faculty_Management->get_my_courses($this->session->fac_id),
		'__grades' => $this->Admin_Faculty_Management->get_faculty_grades($this->session->fac_id),
		'validation' => $this->My_Custom_Model->validate_fac($this->session->fac_id),
		'grades' => $this->Admin_Faculty_Management->get_grade_status($this->session->fac_id),
		];

		$this->load->view('faculty/reports/csv.php', $data);
	}
}