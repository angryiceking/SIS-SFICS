<?php

class Admin_Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Admin_Students_Management', 'Admin_Faculty_Management', 'My_Custom_Model']);
	}

	public function edit_faculty($id)
	{
		$data = [
		'faculty' => $this->Admin_Faculty_Management->get_faculty_by_id($id),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered()
		];
		$this->admin('admin-dash/faculty_management/edit_faculty', $data);
	}

	public function submit_edit_fac($id)
	{
		$data = [
		'id' => $id,
		'fac_fname' => $this->input->post('fac_fname'),
		'fac_mname' => $this->input->post('fac_mname'),
		'fac_lname' => $this->input->post('fac_lname'),
		'fac_contact' => $this->input->post('fac_contact'),
		'fac_address' => $this->input->post('fac_address'),
		'fac_email' => $this->input->post('fac_email')
		];

		$this->Admin_Faculty_Management->edit_faculty_by_id($data);

		return redirect('Admin/Faculty');
	}

	public function edit_student($id)
	{
		$data = [
		'students' => $this->Admin_Students_Management->get_student_by_id($id),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered()
		];
		$this->admin('admin-dash/students_management/edit_student', $data);
	}

	public function Messaging()
	{
		$data = [
		'students' => $this->Admin_Students_Management->get_studs(),
		'news' => $this->Admin_Students_Management->get_news(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'chats' => $this->Admin_Faculty_Management->get_chat()
		];

		$this->admin('admin-dash/messaging', $data);
	}
	public function submit_edit_stu($id)
	{
		$data = [
		'student_id' => $id,
		'fname' => $this->input->post('fname'),
		'mname' => $this->input->post('mname'),
		'lname' => $this->input->post('lname'),
		'contact' => $this->input->post('contact'),
		'address' => $this->input->post('address'),
		'email' => $this->input->post('email'),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered()
		];

		$this->Admin_Students_Management->edit_students_by_id($data);

		return redirect('Admin/Dashboard');
	}

	public function lock_student($id)
	{
		$data = [
		'id' => $id,
		'status' => 'locked',
		];
		$this->Admin_Students_Management->lock_account($data);
		return redirect('Admin/Students');
	}

	public function unlock_student($id)
	{
		$data = [
		'id' => $id,
		'status' => 'active',
		];
		$this->Admin_Students_Management->unlock_account($data);
		return redirect('Admin/Students');
	}

	public function archive_student($id)
	{
		$data = [
		'id' => $id,
		'status' => 'archived',
		];
		$this->Admin_Students_Management->archive_account($data);
		return redirect('Admin/Students');
	}

	public function index()
	{
		if (!$this->session->has_userdata('ad_is_signed') && $this->session->ad_is_signed != TRUE) {
			redirect('/');
		}

		if ($this->session->has_userdata('ad_is_signed') == null) {
			redirect('/');
		}
		
		$data = [
		'students' => $this->Admin_Students_Management->get_studs(),
		'faculty' => $this->Admin_Faculty_Management->count_faculty(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'news' => $this->Admin_Students_Management->get_news()
		];

		$this->admin('admin-dash/dashboard', $data);
	}

	public function generate_pw()
	{
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = substr(str_shuffle($chars), 0, 8);
		return $pass;
	}
	public function create_stud()
	{	
		$name = $this->input->post('lname');
		$contact = $this->input->post('contact');

		$last_id = $this->My_Custom_Model->get_last_id();
		$new_id = $last_id->row('student_id') + 1;
		// var_dump($new_id); exit();
		if ($last_id != null) {
			$username = strtolower($name."-".date('Y')."-00".$new_id);
			$studnum = strtoupper($name."-".date('Y')."-00".$new_id);
		}
		else {
			$username = strtolower($name."-".date('Y')."-001");
			$studnum = strtoupper($name."-".date('Y')."-001");
		}

		// var_dump($last_id->result()); exit();

		$class = $this->input->post('section');

		$course_id = $class[0];
		$year_id = $class[1];
		$section_id = $class[2];

		$data = [
		'studnum' => $studnum,
		'username' => $username,
		'password' => $this->generate_pw(),
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
		'status' => 'active'
		];

		// var_dump($course_id." ".$year_id." ".$section_id); exit();

		$this->Admin_Students_Management->create_stud($data);

		redirect('Admin/Students');
	}

	public function verify_student()
	{
		$data = [
		'students' => $this->Admin_Students_Management->get_unverified_students(),
		'courses' => $this->Admin_Students_Management->get_courses(),
		'sections' => $this->Admin_Students_Management->get_sections(),
		'subjects' => $this->Admin_Students_Management->get_class_subjects(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'courses_subjects' => $this->Admin_Students_Management->get_courses_subjects_students()
		];
		$this->admin('admin-dash/unverified', $data);
	}

	public function submit_verify_student($id)
	{
		$this->Admin_Students_Management->verify_student_by_id($id);

		return redirect('Admin/Students');
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
					'details' => $this->input->post('details'),
					'date' => date('Y-m-d H:i:s'),
					);

				$this->Admin_Students_Management->publish($add);

				echo "<script>alert('Successfully published!".date('Y-m-d H:i:s')."');window.location.href='/student-portal/Admin/Dashboard';</script>";	
			}
		}
	}

	public function upload_video()
	{
		$config['upload_path'] = './assets/videos/';
		$config['allowed_types'] = 'mp4|mp3';
		$config['max_size'] = 100000;
		$config['max_width'] = 4296;
		$config['max_height'] = 3272;		
		$this->load->library('upload', $config);

		$image = 'videofile';

		if ($image != null) {
			if (!$this->upload->do_upload($image)) {
				$error = $this->upload->display_errors();
				echo "<script>alert('".$error."!');window.location.href='/student-portal/Admin/Dashboard';</script>";
				// redirect('Admin/Dashboard');
			}
			else
			{
				$data = [
				'upload_data' => $this->upload->data(),
				];
				$img = $data['upload_data']['file_name'];

				$add = array(
					'video' => $img,
					);

				$this->Admin_Students_Management->publish_vid($add);

				echo "<script>alert('Successfully published!');window.location.href='/student-portal/Admin/Dashboard';</script>";	
			}
		}
	}

	public function show_faculty(){
		$data = [
		'subjects' => $this->Admin_Students_Management->get_subjects(),
		'faculty' => $this->Admin_Faculty_Management->get_fac(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'news' => $this->Admin_Students_Management->get_news()
		];
		$this->admin('admin-dash/faculty', $data);
	}

	public function add_course()
	{
		$data = [
		'course_name' => $this->input->post('course_name'),
		'course_desc' => $this->input->post('course_desc'),
		];

		$this->Admin_Students_Management->add_course($data);
		return redirect('Admin/Courses');
	}

	public function add_class()
	{
		$data = [
		'year_id' => $this->input->post('year'),
		'course_id' => $this->input->post('course'),
		'section_id' => $this->input->post('section'),
		];

		$this->Admin_Students_Management->add_sections($data);
		return redirect('Admin/Classes');
	}

	public function add_faculty()
	{
		$username = strtolower($this->input->post('fac_lname')."-".date('Y')."-".strrev(substr($this->input->post('fac_contact'), 4, 3)));
		$fac_id = strtoupper($this->input->post('fac_lname')."-".date('Y')."-0xxx");

		$data = [
		'username' => $username,
		'password' => 'faculty',
		'fac_fname' => $this->input->post('fac_fname'),
		'fac_mname' => $this->input->post('fac_mname'),
		'fac_lname' => $this->input->post('fac_lname'),
		'fac_contact' => $this->input->post('fac_contact'),
		'fac_address' => $this->input->post('fac_address'),
		'fac_email' => $this->input->post('fac_email'),
		];

		$this->Admin_Faculty_Management->add_fac($data);

		redirect('/Admin/Faculty');
	}

	public function show_students()
	{
		$data = [
		'students' => $this->Admin_Students_Management->get_stud(),
		'courses' => $this->Admin_Students_Management->get_courses(),
		'sections' => $this->Admin_Students_Management->get_sections(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'subjects' => $this->Admin_Students_Management->get_class_subjects(),
		'courses_subjects' => $this->Admin_Students_Management->get_courses_subjects_students()
		];

		// var_dump($data['students']->result()); exit();
		$this->admin('admin-dash/students', $data);
	}

	public function show_courses()
	{
		$data = [
		'courses' => $this->Admin_Students_Management->get_courses(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'subjects' => $this->Admin_Students_Management->get_course_subjects(),
		];
		$this->admin('admin-dash/courses', $data);
	}

	public function edit_course($id)
	{
		$data = [
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'course' => $this->Admin_Students_Management->get_course_by_id($id)
		];
		$this->admin('admin-dash/course_classes/edit_course', $data);
	}

	public function submit_edit_cou($id)
	{
		$data = [
		'id' => $id,
		'course_name' => $this->input->post('course_name'),
		'course_desc' => $this->input->post('course_desc')
		];

		$this->Admin_Students_Management->edit_course_by_id($data);

		return redirect('Admin/Courses');
	}

	public function show_classes()
	{
		$data = [
		'courses' => $this->Admin_Students_Management->get_courses(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'sections' => $this->Admin_Students_Management->get_sections(),
		'subjects' => $this->Admin_Students_Management->get_class_subjects()
		];
		$this->admin('admin-dash/classes', $data);
	}

	public function class_add_subject($id)
	{
		$data = [
		'subjects' => $this->Admin_Students_Management->get_subjects(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'sections' => $this->Admin_Students_Management->get_section_by_id($id),
		];
		$this->admin('admin-dash/course_classes/add_class_subject', $data);
	}

	public function submitted_class_add_subject($id)
	{
		$data = $this->input->post('subj');
		foreach ($data as $key => $value) {
			$this->Admin_Students_Management->class_add_subject($value, $id);
		}

		return redirect('Admin/Classes');
	}

	public function class_remove_subject($id)
	{
		$data = [
		'subjects' => $this->Admin_Students_Management->get_subjects_by_class_id($id),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'sections' => $this->Admin_Students_Management->get_section_by_id($id),
		];
		$this->admin('admin-dash/course_classes/remove_class_subject', $data);
	}

	public function submitted_class_remove_subject($id)
	{
		$data = $this->input->post('subj');
		foreach ($data as $key => $value) {
			$this->Admin_Students_Management->class_remove_subject($value, $id);
		}

		return redirect('Admin/Classes');
	}

	public function edit_class($id)
	{
		$data = [
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'class'=> $this->Admin_Students_Management->get_class_by_id($id)
		];
		$this->admin('admin-dash/course-classes/edit_class', $data);
	}

	public function submit_edit_cla($id)
	{
		$data = [
		'id' => $id,
		'year_id' => $this->input->post('year'),
		'section_id' => $this->input->post('year'),
		'course_id' => $this->input->post('course')
		];

		$this->Admin_Students_Management->edit_class_by_id($data);

		return redirect('Admin/Classes');
	}

	public function show_subjects()
	{
		$data = [
		'courses' => $this->Admin_Students_Management->get_courses(),
		'subjects' => $this->Admin_Students_Management->get_subjects(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'faculty' => $this->Admin_Students_Management->get_faculty()
		];
		$this->admin('admin-dash/subjects', $data);
	}

	public function add_new_sub()
	{
		$data = [
		'courses' => $this->Admin_Students_Management->get_courses(),
		'subjects' => $this->Admin_Students_Management->get_subjects(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'faculty' => $this->Admin_Students_Management->get_faculty()
		];

		$this->admin('admin-dash/course_classes/Add_Subjects', $data);
	}

	public function add_subject()
	{
		$data = [
		'course_id' => $this->input->post('course'),
		'faculty_id' => $this->input->post('faculty'),
		'sem_type' => $this->input->post('semester'),
		'subject_code' => $this->input->post('subject_code'),
		'subject_desc' => $this->input->post('subject_desc')
		];

		$this->Admin_Students_Management->add_subject($data);
		return redirect('Admin/Subjects');
	}

	public function edit_subject($id)
	{
		$data = [
		'courses' => $this->Admin_Students_Management->get_courses(),
		'faculty' => $this->Admin_Students_Management->get_faculty(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'subjects' => $this->Admin_Students_Management->get_subjects_by_id($id)
		];
		$this->admin('admin-dash/subject_management/edit_subject', $data);
	}

	public function submit_edit_sub($id)
	{
		$data = [
		'subject_id' => $id,
		'year' => $this->input->post('year'),
		'sem_type' => $this->input->post('semester'),
		'faculty_id' => $this->input->post('faculty'),
		'subject_code' => $this->input->post('subject_code'),
		'subject_desc' => $this->input->post('subject_desc'),
		'course_id' => $this->input->post('course')
		];

		$this->Admin_Students_Management->edit_subject_by_id($data);

		return redirect('Admin/Subjects');
	}
	public function add_student()
	{
		$data = [
		'students' => $this->Admin_Students_Management->get_stud(),
		'courses' => $this->Admin_Students_Management->get_courses(),
		'sections' => $this->Admin_Students_Management->get_sections(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'subjects' => $this->Admin_Students_Management->get_class_subjects(),
		'courses_subjects' => $this->Admin_Students_Management->get_courses_subjects_students()
		];
		$this->admin('admin-dash/students_management/add_student.php', $data);
	}
	public function add_faculty_ui()
	{
		$data = [
		'subjects' => $this->Admin_Students_Management->get_subjects(),
		'faculty' => $this->Admin_Faculty_Management->get_fac(),
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'news' => $this->Admin_Students_Management->get_news()
		];
		$this->admin('admin-dash/faculty_management/add_faculty.php', $data);
	}

	public function Validation()
	{
		$data = [
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'faculty' => $this->My_Custom_Model->get_submitted_val()
		];

		$this->admin('admin-dash/faculty_management/validate', $data);
	}

	public function SeeGrades($id)
	{
		$data = [
		'unreg' => $this->Admin_Faculty_Management->count_unregistered(),
		'faculty' => $this->My_Custom_Model->get_submitted_val_by_id($id),
		'courses' => $this->Admin_Faculty_Management->get_my_courses($id),
		];

		$this->admin('admin-dash/faculty_management/seegrades', $data);
	}

	public function Approve($id)
	{
		$data = [
		'id' => $id,
		'status' => 'approve'
		];

		$this->My_Custom_Model->approve($data);
		return redirect('Admin/Validation');
	}
}