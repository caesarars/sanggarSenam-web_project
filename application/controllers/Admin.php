<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {


	 public function __construct()
  	{
  		parent::__construct();
  		$this->load->model('M_admin');
  		$this->load->model('M_user');
      
  	}
  	  
  	  public function index(){
	    $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
      $data['order'] = $this->M_admin->read();
	    $data['title'] = 'Kartika Bodyfit';
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/home');
	    $this->load->view('user/footer');
  	}
    public function confirm($user,$orderid){
      $this->M_admin->confirm($user,$orderid);
      redirect('admin');
    }

  }
