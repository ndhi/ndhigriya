<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('portfolio_model');
		$this->load->model('user_model');
		$this->load->model('partner_model');
		$this->load->helper('url_helper');

		if ($this->session->userdata('email')=="") {
			redirect('login');	//lihat di route lempar kemana untuk redirect : login
		}elseif($this->session->userdata('status') == 'user'){
			redirect('pengguna'); //lihat di route lempar kemana untuk redirect : pengguna
		}	
	}

	public function index()
	{
		// $data['content']	= 'admin/pages/home';
    	$data = [
	       'content' => 'admin/pages/dashboard',
           'title'   => 'Dashboard',
           'name' 	 => $this->session->userdata('name')	//mengambil data dari set session masuk
    	];	
		$this->load->view('admin/templates/layout',$data);
	}



/* ========================== FOR USER ==========================
| Note:
|
*/
	public function data_pengguna()
	{
    	$data = [
	       'content' => 'admin/pages/data_user',
	       'query'   => $this->user_model->getUser(),
           'title'   => 'Data user',
           'name' 	 => $this->session->userdata('name')	//mengambil data dari set session masuk
    	];	
		$this->load->view('admin/templates/layout',$data);
	}

  	public function delete($id){
    	$this->user_model->delete_user($id);
    	redirect('data_user');
  	}


/* ========================== FOR USER PARTNER ==========================
| Note:
|
*/
	public function data_partner()
	{
	    $config['uri_segment'] = 3;
	    // $data['content'] = 'admin/pages/data_partner'; 
	      $data = [
	         'content' => 'admin/pages/data_partner',
	         'query'   => $this->partner_model->getPartner(),
	         'title'   => 'Data Partner',
	         'name'    => $this->session->userdata('name')
	      ];
	    $this->load->view('admin/templates/layout',$data);
	}

	public function add_partner()
	{
	     //set rule validation form add
	     $this->form_validation->set_rules('names','Name','required','max_lenght[255]|xss_clean');
	     $this->form_validation->set_rules('jabatans','Jabatan','required','max_lenght[255]|xss_clean');

	     //change mesage rule validation form add 
	     $this->form_validation->set_message('required', 'The {field} field is required.');


	     if($this->form_validation->run()== FALSE){
	         $data = [
	             'content' => 'admin/pages/form_partner/add_partner',
	             'title'   => 'Add Partner',
	             'name'    => $this->session->userdata('name')
	         ];
	        $this->load->view('admin/templates/layout',$data);
	     }else{

	       $config['upload_path'] = './assets/uploads/partner/';
	       $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|xls';
	       $config['encrypt_name'] = TRUE;
	       $config['detect_mime'] = TRUE;
	       $config['max_size'] = 10000;
	       //$config['max_width'] = 2000;
	       //$config['max_height'] = 2000;
	       $this->load->library('upload', $config);

	       if (!$this->upload->do_upload('userfile')){
	          $data = [
	              'content' => 'admin/pages/form_partner/add_partner',
	          ];
	          $this->load->view('admin/templates/layout',$data);

	       }else{
	        $this->load->helper('url');

	          $images = $this->upload->data();

	          $data = array(
	              'name'     => $this->input->post('names'),
	              'jabatan'  => $this->input->post('jabatans'),
	              'image'    => $images['file_name']
	          );

	          $this->partner_model->add($data);
	          // $this->session->set_flashdata('success', 'Insert Data Success');
	          redirect('data_partner');
	       }
	    }
	}

	public function update_partner()
	{
    $id = $this->uri->segment(3);
    $this->form_validation->set_rules('names','name','required','min_lenght[10]|max_lenght[255]|xss_clean');

    if($this->form_validation->run()== FALSE){

       $data = [
           'content' => 'admin/pages/form_partner/edit_partner',
           'model'   => $this->partner_model->get_detail($id),
           'title'   => 'edit partner',
           'name'    => $this->session->userdata('name')
       ];
       $this->load->view('admin/templates/layout',$data);


    }else{

      if($_FILES['userfile']['name'] != '' ){

         $config['upload_path']   = './assets/uploads/partner/';
         $config['allowed_types'] = 'gif|jpg|png|jpeg';
         $config['max_size']      = 2000;
         $config['max_width']     = 2000;
         $config['max_height']    = 2000;

         $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload()){
            $data = [
                'content' => 'admin/pages/form_partner/edit_partner',
                'model'   => $this->partner_model->get_detail($id),
            ];
            $this->load->view('admin/templates/layout',$data);

        }else{
            $this->load->helper('url'); 

            $images = $this->upload->data();
            $data = array(
                 'name'       => $this->input->post('names'),
                 'jabatan'    => $this->input->post('jabatans'),
                 'image'      => $images['file_name'],
            );

           $hapus = $this->partner_model->get_detail($id);
           $namafile = $hapus->image;
           unlink('./assets/uploads/partner/'.$namafile);

           $this->partner_model->edit($id, $data);
           // $this->session->set_flashdata('edit','Data Berhasil Di Edit');
           redirect('data_partner');
        }

      }else{
         $this->load->helper('url'); 

         $data = array(
             'name'      	 => $this->input->post('names'),
             'jabatan'       => $this->input->post('jabatans'),
         );
         $this->partner_model->edit($id, $data);
         // $this->session->set_flashdata('edit','Data Berhasil Di Edit');
         redirect('data_partner');

           }
        }
	}

	public function delete_partner()
	{
	   $id = $this->uri->segment(3);

	   $model = $this->partner_model->get_detail($id);
	   $namafile = $model->image;
	   unlink('./assets/uploads/partner/'.$namafile);

	   $this->partner_model->hapus($id);
	   // $this->session->set_flashdata('deleted','Data Berhasil Di Hapus');
	   redirect('data_partner', 'refresh');		
	}

	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('status');
		session_destroy();
		redirect('login');
	}

}
