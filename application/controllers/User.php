<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct()
  	{
  		parent::__construct();
  		$this->load->model('M_user');
      
  	}

  public function index(){
    $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
    $data['main_jadwal'] = $this->db->get_where('main_jadwal')->result();
    $data['notif'] = $this->db->get('notification_users')->result_array();
    $data['jadwal'] = $this->M_user->read($data['user']['name']);
    $data['title'] = 'Kartika Bodyfit';
    if ($data['user']['role_id'] == 1) {
      $this->load->view('user/header',$data);
      $this->load->view('admin/home');
      $this->load->view('user/footer');
    }else{
      $this->load->view('user/header',$data);
      $this->load->view('dashboard_user/home_user');
      $this->load->view('user/footer');
    }
    
  }
  public function book(){
    $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
    $data['notif'] = $this->db->get('notification_users')->result_array();
    $data['main_jadwal'] = $this->db->get_where('main_jadwal')->result();
    $data['jadwal'] = $this->M_user->read($data['user']['name']);
    $data['title'] = 'Kartika Bodyfit';
    $this->load->view('user/header',$data);
    $this->load->view('user/book');
    $this->load->view('user/footer');
  }

  public function add($id){
        $this->M_user->create($id);      
  }

  public function delete($user,$id){
      $this->M_user->flashDelete();
      $this->M_user->del($user,$id);
			redirect('user','refresh');
  }

  public function update($user,$id){
    $this->M_user->edit($user,$id);
    
  }

  

  public function logout(){
    $this->session->set_flashdata('pesan_ditambah', "<script>
      Swal.fire({
        icon:'success',
        title:'Success',
        text: 'Logged out',
        type : 'success',
        showConfirmButton: false,
        timer:1000
      })
      </script>");
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
    $this->session->unset_userdata('role_id');
		redirect('app');
	}



}
?>
