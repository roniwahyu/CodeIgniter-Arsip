<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('ajax_model','ajaxdb',TRUE);
		$this->load->library('Datatables');
	}

	public function index(){
		$this->load->view('ajax_view');
	}

	public function getdatatables(){
		$this->datatables->select('id,date,name,amount')
				->from('daily');
		echo $this->datatables->generate();
	}

	public function get($id=null){
		if($id!==null){
			echo json_encode($this->ajaxdb->get_one($id));
		}
	}

	public function submit(){
	    if ($this->input->post('ajax')){
	      if ($this->input->post('id')){
	      	$this->ajaxdb->update();
	      	//$this->load->view('data_view');
	      }else{
	      	$this->ajaxdb->save();
	     	//$this->load->view('data_view');
	      }

	    }else{
	      if ($this->input->post('submit')){
	          if ($this->input->post('id')){
	            $this->ajaxdb->update();
	            //redirect('data');
	          }else{
	            $this->ajaxdb->save();
	            //redirect('data');
	          }
	      }
	    }
	  }
	/*   public function delete($id=null) {
      $id = $this->input->post('id');
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
            //$this->data_model->delete($id);
            $this->db->delete($this->table, array('id' => $id));
             $this->session->set_flashdata('notif','data has been deleted');
            //redirect('admin/role_user');
            //$data['query'] = $this->data_model->getAll();
            $this->load->view('data_view');
        } elseif(!empty($id)){
            $hapus['kode'] = $this->uri->segment(3);
            //$this->data_model->delete($hapus['kode']);
            $this->db->delete($this->table, array('id' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
           // $data['query'] = $this->data_model->getAll();
            $this->load->view('data_view');
            //redirect('admin/role_user');
        }
    }
*/

	 public function delete($id=null) {
      $id = $this->input->post('id');
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
           	$this->db->delete('daily', array('id' => $id));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($id)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('daily', array('id' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }

}