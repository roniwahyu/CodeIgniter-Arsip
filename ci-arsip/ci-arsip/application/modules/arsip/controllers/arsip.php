<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class arsip extends MX_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            //redirect('login', 'refresh');
        }
        //Load IgnitedDatatables Library
        $this->load->library('Datatables');
        $this->load->model('arsip_model','arsipdb',TRUE);
    }

    public function index() {
        $this->load->view('arsip_view');
    }
     

    public function getdatatables(){
        $this->datatables->select('file_id,file_name,file_type,file_size,file_url,file_group')
                        ->from('arsip');
        echo $this->datatables->generate();
    }

   

    public function get($file_id=null){
        if($file_id!==null){
            echo json_encode($this->arsipdb->get_one($file_id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('file_id')){
            $this->arsipdb->update($this->input->post('file_id'));
          }else{
            $this->arsipdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('file_id')){
                $this->arsipdb->update($this->input->post('file_id'));
              }else{
                $this->arsipdb->save();
              }
          }
        }
    }

    public function delete($file_id=null) {
      $file_id = $this->input->post('file_id');
        if (isset($_POST['file_id'])) {
            $file_id=$_POST['file_id'];
            $this->db->delete('arsip', array('file_id' => $file_id));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($file_id)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('arsip', array('file_id' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }
    

}

/** Module arsip Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
