<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function index()
	{
		$data = [
	         'title'   => 'Error',
        ];
    $this->load->view('error404',$data);
	}
}
