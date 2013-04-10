<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Arsip extends MX_Controller {

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
        $this->datatables->select('fileid,filename,filetype,filesize,fileurl,filegroup,datetime,')
                        ->from('file');
        echo $this->datatables->generate();
    }

   

    public function get($fileid=null){
        if($fileid!==null){
            echo json_encode($this->arsipdb->get_one($fileid));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('fileid')){
            $this->arsipdb->update($this->input->post('fileid'));
          }else{
            $this->arsipdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('fileid')){
                $this->arsipdb->update($this->input->post('fileid'));
              }else{
                $this->arsipdb->save();
              }
          }
        }
    }

    public function delete($fileid=null) {
      $fileid = $this->input->post('fileid');
        if (isset($_POST['fileid'])) {
            $fileid=$_POST['fileid'];
            $this->db->delete('file', array('fileid' => $fileid));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($fileid)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('file', array('fileid' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }
    

}

/** Module file Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
