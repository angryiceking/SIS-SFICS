<?php
class Admin_Faculty_Management extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_fac()
	{
		return $q = $this->db->get('faculty');
	}

	public function get_my_courses($id)
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON d.`subject_id` = e.`subject_id` LEFT JOIN faculty f ON f.id = e.`faculty_id`  LEFT JOIN grades g ON a.`student_id` = g.`graded_student_id`AND e.`subject_id` = g.`graded_subject_id` WHERE f.`id` = '.$id.' AND a.`status` = "active"');
	}

	public function get_my_courses_by_fac_id($id, $subj_id)
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON d.`subject_id` = e.`subject_id` LEFT JOIN faculty f ON f.id = e.`faculty_id`  LEFT JOIN grades g ON a.`student_id` = g.`graded_student_id`AND e.`subject_id` = g.`graded_subject_id` WHERE e.`subject_id` = '.$subj_id.' AND f.`id` = '.$id.' AND a.`status` = "active"');
	}

	public function get_my_courses_by_sec_id($id, $subj_id, $sec_id)
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON d.`subject_id` = e.`subject_id` LEFT JOIN faculty f ON f.id = e.`faculty_id`  LEFT JOIN grades g ON a.`student_id` = g.`graded_student_id`AND e.`subject_id` = g.`graded_subject_id` WHERE c.`sec_id` = '.$sec_id.' AND e.`subject_id` = '.$subj_id.' AND f.`id` = '.$id.' AND a.`status` = "active"');
	}

	public function get_grade_status($id)
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON d.`subject_id` = e.`subject_id` LEFT JOIN faculty f ON f.id = e.`faculty_id` LEFT JOIN grades g ON a.`student_id` = g.`graded_student_id`AND e.`subject_id` = g.`graded_subject_id` WHERE f.`id` = '.$id);
	}

	public function get_student_by_id($fac_id, $stud_id, $subj_id)
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON d.`subject_id` = e.`subject_id` LEFT JOIN faculty f ON f.id = e.`faculty_id` LEFT JOIN grades g ON a.`student_id` = g.`graded_student_id` AND e.`subject_id` = g.`graded_subject_id` WHERE f.`id` = '.$fac_id.' AND a.`student_id` = '.$stud_id.' AND e.`subject_id` = '.$subj_id);
	}

	public function insert_grade($data)
	{
		$this->db->get('grades');
		
		$q = $this->db->get_where('grades', array('fac_id' => $data['fac_id'], 'graded_student_id' => $data['graded_student_id'], 'graded_subject_id' => $data['graded_subject_id']));
		// var_dump($q->row('id')); exit();
		if (($q->result() == null)) {
			// var_dump('asdasd'); exit();
			$this->db->insert('grades', $data);
		}
		else {
			$this->db->where('grd_id', $q->row('grd_id'));
			// var_dump('goes to update'); exit();
			$this->db->update('grades', $data);
		}
	}

	public function add_fac($data)
	{
		$this->db->get('faculty');

		$this->db->insert('faculty', $data);
	}

	public function get_faculty_by_id($id)
	{
		return $this->db->get_where('faculty', array('id' => $id));
	}

	public function edit_faculty_by_id($data)
	{
		$this->db->get('faculty');
		
		$this->db->where('id', $data['id']);
		$this->db->update('faculty', $data);
	}

	public function insert_chat($data)
	{
		$this->db->get('chats');
		$this->db->insert('chats', $data);
	}

	public function get_latest_chat($id)
	{
		return $q = $this->db->query('SELECT * FROM chats a LEFT JOIN students b ON a.`sender_id` = b.`student_id` WHERE faculty_rec_id = '.$id.' AND type = "student" ORDER BY TIME DESC');
	}

	public function get_chat()
	{
		return $q = $this->db->query('SELECT * FROM messages ORDER BY time DESC');
	}

	public function get_faculty_grades($id)
	{
		return $q = $this->db->query('SELECT * FROM grades WHERE fac_id = '.$id);
	}

	public function count_faculty()
	{
		return $q = $this->db->query('SELECT * FROM faculty');
	}

	public function count_unregistered()
	{
		return $q = $this->db->query('SELECT * FROM students WHERE status = "unverified"');
	}
}