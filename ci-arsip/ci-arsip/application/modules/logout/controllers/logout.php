<?php
/**
**/
class Logout extends MX_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->logout();
	}
	function logout(){
		//$this->session_destroy();
		$data = array(
			'userid' => '',
			'username' => '',
			'isadmin' =>FALSE,
			'logged_in' => FALSE
		);
		$this->session->unset_userdata($data);
		$this->session->sess_destroy($data);
		//redirect('membership/');
		redirect('main');
	}
	function timeout(){}

}
?>