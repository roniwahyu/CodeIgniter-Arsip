<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
  
class Main extends MX_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->library('database');
		$this->load->model('main_model');
		$this->load->library('Datatables');
	}
	function index(){
		//$data['datatables']=$this->get_datatables();
		$this->load->view('main_view');
	}

	public function get_datatables(){
		$this->datatables->select('id,date,name,amount')
						->from('daily');
		// $this->datatables->add_column('edit', '<a href="profiles/edit/$1">EDIT</a>', 'id');
		echo $this->datatables->generate();

	}
	
	
	function submit(){
    if ($this->input->post('ajax')){
      if ($this->input->post('id')){
      	$this->main_model->update();
      	//$data['query'] = $this->main_model->getAll();
      	//$this->load->view('daily/show',$data);
      	$this->load->view('main_view');
      }else{
      	$this->main_model->save();
      	//$data['query'] = $this->main_model->getAll();
      	$this->load->view('main_view');
      }

    }else{
      if ($this->input->post('submit')){
          if ($this->input->post('id')){
            $this->main_model->update();
            redirect('main');
          }else{
            $this->main_model->save();
            redirect('main');
          }
      }
    }
  }


}

/** End Of Main Controller **/
/** Main.php**/