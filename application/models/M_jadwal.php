<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_jadwal extends CI_Model{

  public function read(){
	return $this->db->get('main_jadwal')->result_array();
  }

}


?>