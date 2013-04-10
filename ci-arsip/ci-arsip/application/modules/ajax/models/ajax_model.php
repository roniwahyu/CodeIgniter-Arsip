<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_model extends CI_Model{

	function get_one($id){
		$this->db->where('id',$id);
		$result=$this->db->get('daily');
		if($result->num_rows()==1){
			return $result->row_array();
		}else{
			return array();
		}
	}

	function save(){
	    $date = $this->input->post('date');
	    $name = $this->input->post('name');
	    $amount=$this->input->post('amount');
	    $data = array(
	      'date'=>$date,
	      'name'=>$name,
	      'amount'=>$amount
	    );
	    $this->db->insert('daily',$data);
  	}

	function update(){
      $id   = $this->input->post('id');
      $date = $this->input->post('date');
      $name = $this->input->post('name');
      $amount=$this->input->post('amount');
      $data = array(
        'date'=>$date,
        'name'=>$name,
        'amount'=>$amount
      );
      $this->db->where('id',$id);
      $this->db->update('daily',$data);
    }
}