<?php

class Main_model extends CI_Model{

	function __construct(){
		parent::__construct();
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

  function getAll(){
    $this->db->select('id,date,name,amount');
    $this->db->from('daily');
    $this->db->limit(10);
    $this->db->order_by('id','ASC');
    $query = $this->db->get();

    return $query->result();
  }

  //delete function for jquery ajax datatables
    function delete($id)
    {
        $this->load->database();
        
        $this->db->where('id', $id);
        $this->db->delete('daily');
    }
}
/** End Of**/