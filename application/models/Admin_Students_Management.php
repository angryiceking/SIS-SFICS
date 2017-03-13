<?php

class Admin_Students_Management extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_studs()
	{
		return $q = $this->db->get_where('students', array('status' => 'active'));
	}

	public function get_grades_by_stud($id)
	{
		return $q = $this->db->query('SELECT * FROM grades a LEFT JOIN students b ON a.`graded_student_id` = b.`student_id` LEFT JOIN courses c ON b.`course_id` = c.`course_id` LEFT JOIN sections d ON b.`section_id` = d.`sec_id`LEFT JOIN class_subjects e ON d.`section_id` - e.`class_id` LEFT JOIN subjects f ON e.`subject_id` = f.`subject_id` LEFT JOIN faculty g ON f.`faculty_id` = g.`id`WHERE a.`graded_subject_id` = e.`subject_id` AND a.`graded_student_id` = '.$id);
	}

	public function get_stud()
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON e.`subject_id` = d.`subject_id` WHERE a.`status` = "active"');
	}

	public function get_unverified_students()
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id WHERE a.`status` = "unverified"');	
	}

	public function get_courses()
	{
		return $q = $this->db->query('SELECT * FROM courses');
	}

	public function get_faculty()
	{
		return $q = $this->db->query('SELECT * FROM faculty');
	}

	public function get_subjects()
	{
		return $q = $this->db->query('SELECT * FROM subjects a LEFT JOIN faculty b ON a.`faculty_id` = b.`id`');
	}

	public function get_subjects_by_class_id($id)
	{
		return $q = $this->db->query('SELECT * FROM subjects a LEFT JOIN class_subjects b ON a.`subject_id` = b.`subject_id` WHERE b.`class_id` = '.$id);
	}

	public function get_subjects_by_sections()
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`id` AND a.`year` = c.`year_id`');
	}

	public function get_subjects_by_id($id)
	{
		return $this->db->get_where('subjects', array('subject_id' => $id));
	}

	public function get_courses_subjects()
	{
		return $q = $this->db->query('SELECT * FROM subjects a LEFT JOIN courses b ON a.`course_id` = b.`course_id`');
	}

	public function get_courses_subjects_students()
	{
		return $q = $this->db->query('SELECT * FROM subjects a LEFT JOIN courses b ON a.`course_id` = b.`course_id` LEFT JOIN students c ON a.`year` = c.`stud_year_id`');
	}

	public function get_subjects_courses()
	{
		return $q = $this->db->query('SELECT * FROM courses a RIGHT JOIN subjects b ON a.`course_id` = b.`course_id`');
	}

	public function add_subject($data)
	{
		$this->db->get('subjects');
		$this->db->insert('subjects', $data);
	}

	public function edit_subject_by_id($data)
	{
		$this->db->get('subjects');

		$this->db->where('subject_id', $data['subject_id']);
		$this->db->update('subjects', $data);
	}

	public function add_course($data)
	{
		$this->db->get('courses');
		$this->db->insert('courses', $data);
	}

	public function get_course_by_id($id)
	{
		return $q = $this->db->get_where('courses', array('course_id'=> $id));
	}

	public function get_class_by_id($id)
	{
		return $q = $this->db->get_where('sections', array('id'=> $id));
	}

	public function edit_course_by_id($data)
	{
		$this->db->get('courses');

		$this->db->where('id', $data['id']);
		$this->db->update('courses', $data);
	}

	public function verify_student_by_id($id)
	{
		$this->db->get('students');

		$this->db->where('student_id', $id);
		$data = [
			'status' => 'active'
		];
		$this->db->update('students', $data);
	}


	public function add_class($data)
	{
		$this->db->get('classes');
		$this->db->insert('classes', $data);
	}

	public function add_sections($data)
	{
		$this->db->get('sections');
		$this->db->insert('sections', $data);
	}

	public function get_classes()
	{
		return $q = $this->db->query('SELECT * FROM classes a LEFT JOIN courses b ON a.`course_id`= b.`course_id` LEFT JOIN faculty c ON a.`faculty_id`=c.`id` LEFT JOIN sections d ON a.`section_id` = d.`section_id`');
	}

	public function get_stud_by_id($id)
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.`course_id` = b.`course_id` LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON e.`subject_id` = d.`subject_id` LEFT JOIN faculty f ON f.id = e.`faculty_id` WHERE a.`student_id` = '.$id);	
	}

	public function get_student($id)
	{
		return $q = $this->db->query('SELECT * FROM students WHERE student_id = '.$id);
	}

	public function create_stud($data)
	{
		$this->db->get('students');
		$this->db->insert('students', $data);
	}

	public function get_course_subjects()
	{
		return $q = $this->db->query('SELECT * FROM subjects a LEFT JOIN courses b ON a.`course_id` = b.`course_id`');
	}

	public function get_class_subjects()
	{
		return $q = $this->db->query('SELECT * FROM class_subjects a LEFT JOIN sections b ON a.`class_id`=b.`sec_id` LEFT JOIN subjects c ON a.`subject_id` = c.`subject_id` LEFT JOIN courses d ON b.`course_id` = d.`course_id`');
	}

	public function class_add_subject($subj_id, $id)
	{
		$this->db->get('class_subjects');
		$data = [
		'subject_id' => $subj_id,
		'class_id' => $id
		];
		$this->db->insert('class_subjects', $data);
	}

	public function class_remove_subject($subj_id, $id)
	{
		$this->db->get('class_subjects');
		$data = [
		'subject_id' => $subj_id,
		'class_id' => $id
		];
		$this->db->delete('class_subjects', $data);
	}

	public function get_sections()
	{
		return $q = $this->db->query('SELECT * FROM sections a LEFT JOIN courses b ON a.`course_id` = b.`course_id`');
	}

	public function get_section_by_id($id)
	{
		return $this->db->query('SELECT * FROM sections a LEFT JOIN courses b ON a.`course_id` = b.`course_id` WHERE a.`sec_id` = '.$id);
	}

	public function get_news()
	{
		return $q = $this->db->get('news');
	}

	public function publish($data)
	{
		$this->db->get('news');

		$this->db->insert('news', $data);
	}

	public function publish_vid($data)
	{
		$this->db->get('front_vid');

		$this->db->insert('front_vid', $data);
	}


	public function upload($data)
	{
		$this->db->get('students');
		$this->db->where('student_id', $data['student_id']);
		$this->db->update('students', $data);
	}

	public function get_student_by_id($id)
	{
		return $this->db->get_where('students', array('student_id' => $id));
	}

	public function edit_students_by_id($data)
	{
		$this->db->get('students');

		$this->db->where('student_id', $data['student_id']);
		$this->db->update('students', $data);
	}

	public function lock_account($data)
	{
		$this->db->get('students');

		$this->db->where('student_id', $data['id']);
		$this->db->update('students', $data);
	}

	public function unlock_account($data)
	{
		$this->db->get('students');

		$this->db->where('student_id', $data['id']);
		$this->db->update('students', $data);
	}

	public function archive_account($data)
	{
		$this->db->get('students');

		$this->db->where('student_id', $data['id']);
		$this->db->update('students', $data);
	}
}