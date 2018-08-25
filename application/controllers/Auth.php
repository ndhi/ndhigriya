<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//load User_model.php	
		$this->load->model('user_model');
		//check the username is already set up or not
		if ($this->session->userdata('email')) {
			//if username is already set up, then check the level(status user) of username is admin or member
			if($this->session->userdata('status') == 'admin'){
				redirect('administration');
			}elseif($this->session->userdata('status') == 'user'){
				redirect('pengguna');
			}
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('emails','Email','required|callback_checkEmail|callback_checkRole'); 
		$this->form_validation->set_rules('passwords','Password','required|callback_checkPassword');

		if ($this->form_validation->run() === false) {
	    	$data = [
	    		'error'   => '',
	        	'title'   => 'User Login',
	    	];	
			$this->load->view('user/auth/login',$data);			
		}else{
			$newdata = $this->user_model->get_user('email', $this->input->post('emails'));//mendapatkan user dari email yang di post(input)
					
				//set up session data
				$this->session->set_userdata($newdata);
				if($this->session->userdata('status')=='admin') {
					redirect('administration');
				}elseif ($this->session->userdata('status')=='user') {
					redirect('pengguna');
				}				
			}
	}

	public function register()
	{
		// Validasi untuk form input pada register
		// ex settting : $this->form_validation->set_rules('nama di form input','Text Output ketika salah','required');
		$this->form_validation->set_rules('names','Name','required');
		$this->form_validation->set_rules('emails','Email','required|is_unique[users.email]'); // untuk mengecek email yang di validasi sudah ada atau belum di database dengan menambahkan ::::>>> required|is_unique[nama_tabel.file_di_tabel_yang_di_bandingkan] || ex:required|is_unique[users.email]
		// $this->form_validation->set_rules('selects','Status','required');
		$this->form_validation->set_rules('passwords','Password','required');
		$this->form_validation->set_rules('passwords2','Retype Password','required|matches[passwords]');

		if ($this->form_validation->run() === false) {
	    	$data = [
	    	   'content' => 'admin/pages/auth/form_register',
	    	   'query'   => $this->user_model->getUser(),
	           'title'   => 'Register',
	           'name' 	 => $this->session->userdata('name')
	    	];	
			$this->load->view('admin/templates/layout',$data);
		}else{
			$this->user_model->insert_user();//save user
			$this->send_email_verification($this->input->post('emails'), $_SESSION['token']);//verifikasi email
			redirect('data_user');
		}
	}

	public function send_email_verification($emails, $token)
	{
		$this->load->library('email');
		$this->email->from('gandhisetyawan1@gmail.com','ADM-ndhigriya');
		$this->email->to($emails);
		$this->email->subject('register aplikasi auth local');
		$this->email->message("
					klik link di bawah untuk konfirmasi pendaftaran
					<a href='http://127.0.0.1/ndhigriya/verify/$emails/$token'> Klik Email Konfirmasi</a>
					");
		$this->email->set_mailtype('html');
		$this->email->send();
	}
	public function verify_register($emails, $token)
	{
		$user = $this->user_model->get_user('email', $emails);

		//Mengecek email ada atau tidak.
		if(!$user)
			die('email not exists');

		if($user['token'] !== $token)
			die('token not match');

		//Update user Role
		$this->user_model->update_role($user['id'], 1);

		//set session
		$_SESSION['user_id']	= $user['id'];
		$_SESSION['logged_in']	= true;
		//redirect halaman login
		redirect('login');
	}

	public function checkEmail($emails)
	{
		if(!$this->user_model->get_user('email', $emails)) {
			$this->form_validation->set_message('checkEmail','Email is not on database');
			return false;
		}
			return true;
	}

	public function checkPassword($password)
	{
		$user = $this->user_model->get_user('email' ,$this->input->post('emails'));

		if(!$this->user_model->checkPassword($user['email'], $password)) {
			$this->form_validation->set_message('checkPassword', 'Password is incorrect');
			return false;
		}
			return true;
	}

	public function checkRole($email)
	{
		$user = $this->user_model->get_user('email', $email);
		if($user['role']  == 0) {
			$this->form_validation->set_message('checkRole', 'Email not active yet');
			return false;
		}
			return true;
	}

}
