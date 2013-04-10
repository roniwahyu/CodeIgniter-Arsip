
<?php if (! defined('BASEPATH')) exit('No direct script access');

/**
Controller: Dashboard
Created: 28/05/2012
Description: Login controller
Author: Syahroni Wahyu Iriananda <roniwahyu@gmail.com>
*/?>

<?php 
class Dashboard extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dashboard_model','dashdb',TRUE);
		
	}

	function index(){
		if($this->session->userdata('login')===TRUE){
			//$data['content']="plau";
			$data["title"]="Beranda";
			$data['pelanggan']="30039";
			//$data['content']="template";
			$data['main_view']="";
			$this->load->view('dashboard',$data);
		}else{
			redirect('login');
		}	
	}

	function documentation(){
		$data['content']=$this->load->view('main/content');
		$this->load->view('dashboard',$data);
	}
	
}
?>