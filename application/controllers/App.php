<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->dbforge();
	}	

	public function index()
	{
			$data['title'] = 'Kartika Bodyfit';
			$this->load->view('landing_page/header',$data);
			$this->load->view('landing_page/home');
			$this->load->view('landing_page/footer');

	}

	public function jadwal()
	{
			$data['title'] = 'Kartika Bodyfit';
			$this->load->view('header',$data);
			$this->load->view('jadwal');
			$this->load->view('footer');

	}

	public function login(){
		$this->load->library('session');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('header',$data);
			$this->load->view('home');
			$this->load->view('footer');
		}else{
			$this->_login();
		}
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('users', ['email' => $email])->row_array();
		if ($user) {
			//cek user sudah aktifasi email
			if ($user['role_id'] == 1) {
				if (password_verify($password,$user['password'])) {
						$data = [
							'email' => $user['email'],
							'name' => $user['name'],
							'role_id' => $user['role_id']
						];
						$this->session->set_userdata($data);
						redirect('admin');
					}else{
						$this->session->set_flashdata('message_error_login','<div class="alert alert-danger" role="alert">
						password is wrong</div>');
					redirect('app');
					}
			}
			if ($user['is_active'] == 1) {
				// cek user password
				if (password_verify($password,$user['password'])) {
						$data = [
							'email' => $user['email'],
							'name' => $user['name'],
							'role_id' => $user['role_id']
						];
						$this->session->set_userdata($data);
						redirect('user');
					}else{
						$this->session->set_flashdata('message_error_login','<div class="alert alert-danger" role="alert">
						password is wrong</div>');
					redirect('app');
					}
			}else{
				$this->session->set_flashdata('message_error_login','<div class="alert alert-danger" role="alert">
				this email has not been activated</div>');
				redirect('app');
			}
		}else{
			$this->session->set_flashdata('message_error_login','<div class="alert alert-danger" role="alert">
			password or email is wrong</div>');
			redirect('app');
		}
	}

	public function regis()
	{
		$this->form_validation->set_rules('name','Name','required|trim|alpha_numeric',[
			'alpha_numeric' => 'only character and numeric is required'
		]);
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]',[
			'is_unique' => 'this email has been registered'
		]);
		$this->form_validation->set_rules('password','Password','required|trim|min_length[6]|matches[confirm-password]',
		[
			'matches' => "password didn't match !",
			'min_length' => 'password too short'
		]
		);
		$this->form_validation->set_rules('confirm-password','Confirm-password',
		'required|trim|min_length[6]|matches[password]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Kartika Bodyfit - Registration';
			$this->load->view('header',$data);
			$this->load->view('register');
			$this->load->view('footer');
		}else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name',true)),
				'email' => htmlspecialchars($this->input->post('email',true)),
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'data_created' => date("Y-m-d H:i:s")
			];

			
			$fields = array(
				'id' => array(
				  'type' => 'INT',
				  'constraint' => 11,
				  'unsigned' => TRUE,
				  'auto_increment' => TRUE
				),
				'order_id' => array(
				  'type' => 'VARCHAR',
				  'constraint' => 20,
			
				),
				'atas_nama' => array(
				  'type' => 'VARCHAR',
				  'constraint' => 128
				),
				'hari_jadwal' => array(
				  'type' => 'VARCHAR',
				  'constraint' => 128
				  
				),
				'jam_jadwal' => array(
				  'type' => 'VARCHAR',
				  'constraint' => 30
				  
				),
				'jumlah_orang' => array(
				  'type' => 'INT',
				  'constraint' => 30
				),
				'keterangan' => array(
					'type' => 'VARCHAR',
					'constraint' => 50
					
				 ),
				 'waktu_dibuat'=>array(
				  	 'type'=>'TIMESTAMP',
				  ),
				 'status'=>array(
				  	 'type'=>'INT',
				  	 'constraint' => 1
				  ),
			   );
			  
			  $this->dbforge->add_field($fields);
			  
			  // define primary key
			  $this->dbforge->add_key('id', TRUE);


			$this->dbforge->create_table('jadwal_user'.$data['name'], TRUE);
			$this->db->insert('users',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  Success!! , account has been created
</div>');
			redirect('app');
		}

	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('role_id');
		redirect('app');
	}
}
