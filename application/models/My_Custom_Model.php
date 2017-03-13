<?php 

class My_Custom_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_last_id()
	{
		return $q = $this->db->query('SELECT student_id FROM students ORDER BY student_id DESC LIMIT 1');
	}

	public function get_news($id)
	{
		return $q = $this->db->query('SELECT * from news where id = '.$id);
	}

	public function validate_fac($id)
	{
		return $q = $this->db->query('SELECT * FROM faculty WHERE id ='.$id);
	}

	public function get_submitted_val()
	{
		return $q = $this->db->query('select * from faculty where status = "submitted"');
	}

	public function get_submitted_val_by_id($id)
	{
		return $q = $this->db->query('SELECT * FROM students a LEFT JOIN courses b ON a.course_id = b.course_id LEFT JOIN sections c ON a.`section_id` = c.`sec_id` LEFT JOIN class_subjects d ON c.`sec_id` = d.`class_id` LEFT JOIN subjects e ON d.`subject_id` = e.`subject_id` LEFT JOIN faculty f ON f.id = e.`faculty_id` LEFT JOIN grades g ON a.`student_id` = g.`graded_student_id`AND e.`subject_id` = g.`graded_subject_id` WHERE f.`id`= '.$id.' AND f.status = "submitted"');
	}

	public function approve($data)
	{
		$this->db->get('faculty');

		$this->db->where('id', $data['id']);

		$this->db->update('faculty', $data);
	}

	public function submit_validation($data)
	{
		$this->db->get('faculty');

		$this->db->where('id', $data['id']);

		$this->db->update('faculty', $data);
	}

	public function insert_ave($data)
	{
		$this->db->get('grades');

		$q = $this->db->get_where('grades', array('fac_id' => $data['fac_id'], 'graded_student_id' => $data['graded_student_id'], 'graded_subject_id' => $data['graded_subject_id']));

		$this->db->where('grd_id', $q->row('grd_id'));
		
		$this->db->update('grades', $data);
	}

	public function send_message($data)
	{
		$this->db->get('messages');
		$this->db->insert('messages', $data);
	}

	public function get_messages()
	{
		return $q = $this->db->query('SELECT * FROM messages ORDER BY id DESC');
	}

	public function faculty_subject($fac_id)
	{
		return $q = $this->db->query('SELECT * FROM faculty a LEFT JOIN subjects b ON a.`id` = b.`faculty_id` WHERE a.`id` = '.$fac_id);
	}
}