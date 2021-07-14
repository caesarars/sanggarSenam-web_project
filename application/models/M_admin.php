<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_admin extends CI_Model{


	public function read(){
		return $this->db->get('order_book')->result_array();
  	}

  	public function sendNotification($user,$orderid)
  	{
  		$tableName = 'notification_users';
  		$data_notification = [
  			'order_id' => $orderid,
  			'username' => $user,
  			'status' => 1
  		];
  		$this->db->insert($tableName,$data_notification);
  	}



  	public function confirm($user,$orderid)
  	{
      $dataConfirm = [
        "pengorder"=>$user,
        "order_id"=>$orderid
      ];
  		$data = [
  			'status' => 1,
  		];
      $this->db->where('order_id',$orderid);
      $this->db->update('jadwal_user'.$user,$data);
      $this->db->where('order_id',$orderid);
      $this->db->update('main_jadwal',$data);
      $this->db->where('order_id',$orderid);
      $this->db->update('order_book',$data);
  		$this->sendNotification($user,$orderid);
  	}

}