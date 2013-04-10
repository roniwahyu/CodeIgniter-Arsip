<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Arsip_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('arsip', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($file_id) {
        $this->db->where('file_id', $file_id);
        $result = $this->db->get('arsip');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'file_name' => $this->input->post('file_name', TRUE),
           
            'file_type' => $this->input->post('file_type', TRUE),
           
            'file_size' => $this->input->post('file_size', TRUE),
           
            'file_url' => $this->input->post('file_url', TRUE),
           
            'file_group' => $this->input->post('file_group', TRUE),
           
            'datetime' => date('Y-m-d H:i:s').'.000',
           
        );
        $this->db->insert('arsip', $data);
    }

    function update($file_id) {
        $data = array(
        'file_id' => $this->input->post('file_id',TRUE),
       'file_name' => $this->input->post('file_name', TRUE),
       
       'file_type' => $this->input->post('file_type', TRUE),
       
       'file_size' => $this->input->post('file_size', TRUE),
       
       'file_url' => $this->input->post('file_url', TRUE),
       
       'file_group' => $this->input->post('file_group', TRUE),
       
       'datetime' => date('Y-m-d H:i:s').'.000',
       
        );
        $this->db->where('file_id', $file_id);
        $this->db->update('arsip', $data);
    }

    function delete($file_id) {
        foreach ($file_id as $row) {
            $this->db->where('file_id', $row);
            $this->db->delete('arsip');
        }
    }

}
?>
