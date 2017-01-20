<?php

class Admin_Students_Management extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_stud()
	{
		return $q = $this->db->get('students');
	}

	public function get_stud_by_id($id)
	{
		return $q = $this->db->get_where('students', array('id'=> $id));
	}

	public function create_stud($data)
	{
		$this->db->get('students');

		$this->db->insert('students', $data);
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
}