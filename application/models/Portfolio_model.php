<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function getPortfolio(){
	    return $this->db->get('portfolio');
	}

	// public function get_portfolio(){
	// 	$query = $this->db->get('portfolio');
	// 	return $query->result_array();
	// }

	public function add($data){
        return $this->db->insert('portfolio',$data);

		// $this->load->helper('url');

		// $slug = url_title($this->input->post('titles'), 'dash', TRUE);

		// $data = array(
		// 	'title' 	=> $this->input->post('titles'),
		// 	'text'		=> $this->input->post('texts'),
		// 	'linkpage' 	=> $this->input->post('linkpages'),
		// 	'slug' 		=> 'slug'
		// );

		// return $this->db->insert('portfolio', $data);
 
		// INSERT INTO PORTFOLIO
	}

	public function get_detail($id){
        $query = $this->db->get_where('portfolio', array('id' => $id));
        return $query->row();
    }

	public function edit($id, $data){	
	    $this->db->where('id', $id);
	    $this->db->update('portfolio', $data);	
	}

	public function Hapus($id){
       return $this->db->delete('portfolio', array('id' => $id));
	}
	
}