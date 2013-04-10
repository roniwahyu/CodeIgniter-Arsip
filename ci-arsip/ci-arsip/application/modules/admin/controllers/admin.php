<?php if (! defined('BASEPATH')) exit('No direct script access');

class Admin extends MX_Controller {

	var $id_user;
	function __construct() {
		parent::__construct();
		$this->_id_user = $this->session->userdata('id_user');
	}
	function _session() {
		if(!$this->session->userdata('id_user'))
			redirect('main');
	}
	function index() {
		$this->load->view('admin');
	}
	function menu() {
		echo '<h1>ini menu bukan yang lain!</h1>';
	}

}