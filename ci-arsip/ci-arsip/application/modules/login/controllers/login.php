<?php
class Login extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('login_model','logindb',TRUE);


	}

	function index(){
		if($this->session->userdata('login')===TRUE){
			if($this->session->userdata('admin')===TRUE){
				redirect('admin');
			}else{
				redirect('main');
			}
		}else{
			$this->load->view('login');
		}
	}

	function signin(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == TRUE){
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($this->logindb->check_user($username, $password) == TRUE) {
				foreach($this->logindb->get_user($username) as $row){
					$userid=$row->userid;
					$isuser=$this->logindb->isuser($userid)->row();
					$data=array(
						'userid'=>$row->userid,
						'userlevel'=>$row->userlevel,
						'username'=>$row->username,
						'firstname'=>$row->firstname,
						'roleid'=>$isuser->roleid,
						'login'=>TRUE,
					);
					
					//$row=$this->memberdb->get_userprofile($userid);
					//echo $isuser->roleid;
				}
				//echo $userid;
				//echo var_dump($this->logindb->isuser($userid)->result());
				$admindata=$this->isadmin($data['userid']);
				//echo var_dump($admindata);
				$this->session->set_userdata($admindata);
				$this->session->set_userdata($data);
				//echo var_dump($this->session->userdata($admin_data));
				redirect('main');
			}else{
				$this->session->set_flashdata('message','Please enter username/password properly');
				redirect('login');
			}
		}else{
			$this->session->set_flashdata('message','Please enter username/password properly');
			redirect('login');
		}
	}

	function isadmin($userid=null){
		$admindata=array();
		$adminrow=$this->logindb->isadmin($userid)->num_rows();
		$adminresult=$this->logindb->isadmin($userid)->result();				
		if($adminrow>0){
			foreach($adminresult as $row){
				$adminuser=$row->userid;
			}
			$admindata=array(
					'isadmin'=>TRUE,
					'useradmin'=>$adminuser,
					);
		}else{
				$admindata=array('isadmin'=>FALSE,'useradmin'=>'');
		}
		//return $this->session->set_userdata($admindata);	
		return $admindata;
	}



}

?>