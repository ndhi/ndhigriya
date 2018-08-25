<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');

		if ($this->session->userdata('email')=="") {
			redirect('login');
		}elseif($this->session->userdata('status') == 'admin'){
			redirect('administration');
		}		
	}

	public function index($default ='profile')
	{
	if(!file_exists(APPPATH."views/user/pages/".$default.'.php'))
		{
			show_404();
		}	

		$data = [
	       'title'   => 'Profile',
	       'email' 	 => $this->session->userdata('email'),
	       'name' 	 => $this->session->userdata('name')
		];

		$this->load->view('user/templates/header',$data);
		$this->load->view('user/templates/sidebar');
		$this->load->view('user/pages/'.$default);
		$this->load->view('user/templates/footer');
	}

	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('status');
		session_destroy();
		redirect('login');
	}

}
