<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function insert_user()
	{
		$this->load->helper('string');
		$_SESSION['token'] = random_string('alnum',16);

		$data = [
			'name'		=> $this->input->post('names'),
			'email'		=> $this->input->post('emails'),
			'password'	=> password_hash($this->input->post('passwords'), PASSWORD_DEFAULT),
			'token'		=> $_SESSION['token']
		];

		$this->db->insert('users', $data);
	}

	public function get_user($key, $value)
	{
		$query = $this->db->get_where('users', array($key=>$value));
		if(!empty($query->row_array())) {
			return $query->row_array();
		}

		return false;
	}

	public function update_role($user_id, $role_nr)
	{
		$data = array('role' => $role_nr);
		$this->db->where('id', $user_id);
		return $this->db->update('users', $data);
	}

	public function is_loggedIn()
	{
		if(!isset($_SESSION['logged_in'])) {
			return false;
		}

		return true;
	}

	public function checkPassword($email, $password)
	{
		$hash = $this->get_user('email', $email)['password'];
		if(password_verify($password, $hash)) {
			return true;
		}
			return false;
	}

	// ambil data user from database
	public function getUser(){
	    return $this->db->get('users');
	}

	public function delete_user($id){
    	return $this->db->delete('users', array('id'=>$id));
  }


}

