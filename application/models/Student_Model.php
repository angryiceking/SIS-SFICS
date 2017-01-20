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

		$this->db->where('id', $data['id']);
		$this->db->update('students', $edit);
	}
}