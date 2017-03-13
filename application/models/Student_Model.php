<?php

class Student_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function edit($data)
	{	
		$this->db->get('students');
		
		$edit = [
		'password' => $data['password'],
		'age' => $data['age'],
		'address' => $data['address']
		];

		$this->db->where('student_id', $data['id']);
		$this->db->update('students', $edit);
	}

	public function insert_chat($data)
	{
		$this->db->get('chats');
		$this->db->insert('chats', $data);
	}

	public function get_latest_chat($id)
	{
		return $q = $this->db->query('SELECT * FROM chats a LEFT JOIN faculty b ON a.`faculty_rec_id` = b.`id` LEFT JOIN students c ON a.`sender_id` = c.`student_id` WHERE sender_id = '.$id.' ORDER BY TIME DESC');
	}
}