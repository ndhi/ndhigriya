<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('portfolio_model');
		$this->load->model('partner_model');
		$this->load->helper('url_helper');
	}
	
	public function view($depan ='content')
	{
		if(!file_exists(APPPATH."views/pages/".$depan.'.php'))
		{
			show_404();
		}
				
		$data['portfolio']  = $this->portfolio_model->getPortfolio();	//mengambil data dari model :  kasus ini:: portfolio_model.
		$data['partner']    = $this->partner_model->getPartner();	//mengambil data dari model :  kasus ini:: partner_model.

		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$depan);
		$this->load->view('templates/footer');
	}

	public function underconstructions()
	{
		$data = 
		[
		    'title'   => 'underconstructions',
	    ];
	    $this->load->view('underconstructions',$data);
	}
}
