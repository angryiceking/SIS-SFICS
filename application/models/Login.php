<?php

class Login extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function authenticate($user, $pass)
	{
		$query = $this->db->get_where('students', array('username' => $user, 'password' => $pass));
		return $query->row();
	}
	public function authenticate_admin($user, $pass)
	{
		$query = $this->db->get_where('admin', array('username' => $user, 'password' => $pass));
		return $query->row();
	}
}