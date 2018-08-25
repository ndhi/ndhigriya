<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('portfolio_model');
    $this->load->helper('url_helper');

    if ($this->session->userdata('email')=="") {
      redirect('login');  //lihat di route lempar kemana untuk redirect : login
    }elseif($this->session->userdata('status') == 'user'){
      redirect('pengguna'); //lihat di route lempar kemana untuk redirect : pengguna
    }
  }

  public function index()
  {
    $config['uri_segment'] = 3;
    // $data['content'] = 'admin/pages/portfolios'; 
      $data = [
         'content' => 'admin/pages/portfolios',
         'query'   => $this->portfolio_model->getPortfolio(),
         'title'   => 'Portfolio',
         'name'    => $this->session->userdata('name')
      ];
    $this->load->view('admin/templates/layout',$data);
  }

  public function add()
  {

     //set rule validation form add
     $this->form_validation->set_rules('titles','title','required','max_lenght[255]|xss_clean');
     $this->form_validation->set_rules('texts','text','required','max_lenght[255]|xss_clean');
     $this->form_validation->set_rules('linkpages','linkpage','required','xss_clean');

     //change mesage rule validation form add 
     $this->form_validation->set_message('required', 'The {field} field is required.');


     if($this->form_validation->run()== FALSE){
         $data = [
             'content' => 'admin/pages/form_portfolio/add_portfolio',
             'title'   => 'Add',
             'name'    => $this->session->userdata('name')
         ];
        $this->load->view('admin/templates/layout',$data);
     }else{

       $config['upload_path'] = './assets/uploads/portfolio/';
       $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|xls';
       $config['encrypt_name'] = TRUE;
       $config['detect_mime'] = TRUE;
       $config['max_size'] = 10000;
       //$config['max_width'] = 2000;
       //$config['max_height'] = 2000;
       $this->load->library('upload', $config);

       if (!$this->upload->do_upload('userfile')){
          $data = [
              'content' => 'admin/pages/form_portfolio/add_portfolio',
          ];
          $this->load->view('admin/templates/layout',$data);

       }else{
        $this->load->helper('url');

          $slug = url_title($this->input->post('titles'), 'dash', TRUE);
          $images = $this->upload->data();

          $data = array(
              'title'     => $this->input->post('titles'),
              'text'      => $this->input->post('texts'),
              'linkpage'  => $this->input->post('linkpages'),
              'image'     => $images['file_name'],
              'slug'      => $slug
          );

          $this->portfolio_model->add($data);
          // $this->session->set_flashdata('success', 'Insert Data Success');
          redirect('portfolio');
       }
    }
  }

  public function update()
  {

    $id = $this->uri->segment(3);
    $this->form_validation->set_rules('titles','title','required','min_lenght[10]|max_lenght[255]|xss_clean');

    if($this->form_validation->run()== FALSE){

       $data = [
           'content' => 'admin/pages/form_portfolio/edit_portfolio',
           'models'   => $this->portfolio_model->get_detail($id),
           'title'   => 'edit',
           'name'    => $this->session->userdata('name')
       ];
       $this->load->view('admin/templates/layout',$data);


    }else{

      if($_FILES['userfile']['name'] != '' ){

         $config['upload_path']   = './assets/uploads/portfolio/';
         $config['allowed_types'] = 'gif|jpg|png|jpeg';
         $config['max_size']      = 2000;
         $config['max_width']     = 2000;
         $config['max_height']    = 2000;

         $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload()){
            $data = [
                'content' => 'admin/pages/form_portfolio/edit_portfolio',
                'model'   => $this->portfolio_model->get_detail($id),
            ];
            $this->load->view('admin/templates/layout',$data);

        }else{
            $this->load->helper('url'); 

            $slug = url_title($this->input->post('titles'), 'dash', TRUE);
            $images = $this->upload->data();
            $data = array(
                 'title'      => $this->input->post('titles'),
                 'text'       => $this->input->post('texts'),
                 'linkpage'   => $this->input->post('linkpages'),
                 'image'      => $images['file_name'],
                 'slug'       => $slug
            );

           $hapus = $this->portfolio_model->get_detail($id);
           $namafile = $hapus->image;
           unlink('./assets/uploads/portfolio/'.$namafile);

           $this->portfolio_model->edit($id, $data);
           // $this->session->set_flashdata('edit','Data Berhasil Di Edit');
           redirect('portfolio');
        }

      }else{
         $this->load->helper('url'); 

         $slug = url_title($this->input->post('titles'), 'dash', TRUE);
         $data = array(
             'title'      => $this->input->post('titles'),
             'text'       => $this->input->post('texts'),
             'linkpage'   => $this->input->post('linkpages'),
             'slug'       => $slug
         );
         $this->portfolio_model->edit($id, $data);
         // $this->session->set_flashdata('edit','Data Berhasil Di Edit');
         redirect('portfolio');

           }
        }
  }

  public function delete()
  {

   $id = $this->uri->segment(3);

   $model = $this->portfolio_model->get_detail($id);
   $namafile = $model->image;
   unlink('./assets/uploads/portfolio/'.$namafile);

   $this->portfolio_model->hapus($id);
   // $this->session->set_flashdata('deleted','Data Berhasil Di Hapus');
   redirect('portfolio', 'refresh');
  }

}

