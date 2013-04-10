<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class users extends MX_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            //redirect('login', 'refresh');
        }
        //Load IgnitedDatatables Library
        $this->load->library('Datatables');
        $this->load->model('users_model','usersdb',TRUE);
    }

    public function index() {
        $this->load->view('users_view');
    }
    

    public function getdatatables(){
        $this->datatables->select('username,firstname,lastname,phone,email,address,address2,city,province,postal,country')
                        ->from('users');
        echo $this->datatables->generate();
    }

    

    public function get($userid=null){
        if($userid!==null){
            echo json_encode($this->usersdb->get_one($userid));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('userid')){
            $this->usersdb->update();
          }else{
            $this->usersdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('userid')){
                $this->usersdb->update();
              }else{
                $this->usersdb->save();
              }
          }
        }
    }

    public function delete($userid=null) {
      $userid = $this->input->post('userid');
        if (isset($_POST['userid'])) {
            $userid=$_POST['userid'];
            $this->db->delete('users', array('userid' => $userid));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($userid)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('users', array('userid' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }
    

}

/** Module users Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
