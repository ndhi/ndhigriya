<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function getPartner(){
	    return $this->db->get('partner');
	}

	public function add($data){
        return $this->db->insert('partner',$data);
	}

	public function get_detail($id){
        $query = $this->db->get_where('partner', array('id' => $id));
        return $query->row();
    }

	public function edit($id, $data){	
	    $this->db->where('id', $id);
	    $this->db->update('partner', $data);	
	}

	public function Hapus($id){
       return $this->db->delete('partner', array('id' => $id));
	}
	
}