<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Users_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('users', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($userid) {
        $this->db->where('userid', $userid);
        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'username' => $this->input->post('username', TRUE),
           
            'password' => $this->input->post('password', TRUE),
           
            'firstname' => $this->input->post('firstname', TRUE),
           
            'midname' => $this->input->post('midname', TRUE),
           
            'lastname' => $this->input->post('lastname', TRUE),
           
            'phone' => $this->input->post('phone', TRUE),
           
            'email' => $this->input->post('email', TRUE),
           
            'address' => $this->input->post('address', TRUE),
           
            'address2' => $this->input->post('address2', TRUE),
           
            'city' => $this->input->post('city', TRUE),
           
            'province' => $this->input->post('province', TRUE),
           
            'postal' => $this->input->post('postal', TRUE),
           
            'country' => $this->input->post('country', TRUE),
           
            'birthdate' => $this->input->post('birthdate', TRUE),
           
            'userlevel' => $this->input->post('userlevel', TRUE),
           
            'marital' => $this->input->post('marital', TRUE),
           
            'isactive' => $this->input->post('isactive', TRUE),
           
            'photo' => $this->input->post('photo', TRUE),
           
            'timestamp' => date('Y-m-d H:i:s').'.000',
           
        );
        $this->db->insert('users', $data);
    }

    function update($userid) {
        $data = array(
         
       'username' => $this->input->post('username', TRUE),
       
       'password' => $this->input->post('password', TRUE),
       
       'firstname' => $this->input->post('firstname', TRUE),
       
       'midname' => $this->input->post('midname', TRUE),
       
       'lastname' => $this->input->post('lastname', TRUE),
       
       'phone' => $this->input->post('phone', TRUE),
       
       'email' => $this->input->post('email', TRUE),
       
       'address' => $this->input->post('address', TRUE),
       
       'address2' => $this->input->post('address2', TRUE),
       
       'city' => $this->input->post('city', TRUE),
       
       'province' => $this->input->post('province', TRUE),
       
       'postal' => $this->input->post('postal', TRUE),
       
       'country' => $this->input->post('country', TRUE),
       
       'birthdate' => $this->input->post('birthdate', TRUE),
       
       'userlevel' => $this->input->post('userlevel', TRUE),
       
       'marital' => $this->input->post('marital', TRUE),
       
       'isactive' => $this->input->post('isactive', TRUE),
       
       'photo' => $this->input->post('photo', TRUE),
       
       'timestamp' => date('Y-m-d H:i:s').'.000',
       
        );
        $this->db->where('userid', $userid);
        $this->db->update('users', $data);
    }

    function delete($userid) {
        foreach ($userid as $row) {
            $this->db->where('userid', $row);
            $this->db->delete('users');
        }
    }

}
?>
