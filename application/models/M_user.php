<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_user extends CI_Model{

  public function read($id){
    # $this->db->order_by('tanggal', 'Desc');
		return $this->db->get('jadwal_user'.$id)->result_array();
  }

  public function create($id){
      $user = $this->input->post('user');
      $user_id = $this->input->post('id-user');
      $atasNama = $this->input->post('atas-nama');
      $hariJadwal = $this->input->post('hari-jadwal');



      $row_order_unconfirm = [
        'status' => 0
      ];

      $row_order = $this->db->get_where("jadwal_user".$user,$row_order_unconfirm)->num_rows();


      switch ($hariJadwal) {
        case 1:
          $hariJadwal = "Senin";
          break;
        case 2:
          $hariJadwal = "Selasa";
          break;
        case 3:
          $hariJadwal = "Rabu";
          break;
        case 4:
          $hariJadwal = "Kamis";
          break;
        case 5:
          $hariJadwal = "Jumat";
          break;
        case 6:
          $hariJadwal = "Sabtu";
          break;
        case 7:
          $hariJadwal = "Minggu";
          break;  
        default:
          $hariJadwal = "";
          break;
      }
      $jamJadwal = $this->input->post('jam-jadwal');
      switch ($jamJadwal) {
        case 1:
          $jamJadwal = "07.00 s/d 08.00";
          break;
        case 2:
          $jamJadwal = "09.00 s/d 10.00";
          break;
        case 3:
          $jamJadwal = "11.00 s/d 12.00";
          break;
        case 4:
          $jamJadwal = "13.00 s/d 14.00";
          break;
        case 5:
          $jamJadwal = "15.00 s/d 16.00";
          break;
        case 6:
          $jamJadwal = "17.00 s/d 18.00";
          break;
        case 7:
          $jamJadwal = "20.00 s/d 21.00";
          break;  
        default:
          $jamJadwal = "";
          break;
      }
      $jumlahOrang = $this->input->post('jumlah-orang');
      $keterangan = $this->input->post('keterangan');
      $waktuDibuat = date("Y-m-d H:i:s");
      $biaya = $this->input->post('biaya');
      $data = [
        'order_id' => $user_id.date("dmHis").$row_order,
        'atas_nama' => $atasNama,
        'hari_jadwal'=> $hariJadwal,
        'jam_jadwal' => $jamJadwal,
        'jumlah_orang' =>$jumlahOrang,
        'keterangan'=>$keterangan,
        'waktu_dibuat'=>$waktuDibuat,
        'status'=> 0
      ];
      $dataMain = [
        'jam' => $jamJadwal,
        'hari' => $hariJadwal,
        'atas_nama' => $atasNama,
        'status' => 0,
        'order_id' => $user_id.date("dmHis").$row_order,

      ];
      $dataOrder = [
        'order_id' => $user_id.date("dmHis").$row_order,
        'pengorder' => $id,
        'atas_nama' =>$atasNama,
        'hari' =>$hariJadwal,
        'jam' => $jamJadwal,
        'jumlah' =>$jumlahOrang,
        'keterangan'=>$keterangan,
        'biaya' => $biaya,
        'status' => 0,
        'order_dibuat'=>$waktuDibuat

      ];

      $where = [
        'jam' => $jamJadwal , 
        "hari"=> $hariJadwal,  'status' => 1
      ];
      $check = $this->db->get_where("main_jadwal",$where)->num_rows();

      if ($check == 0) {
        $this->db->insert('jadwal_user'.$id,$data);
        $this->db->insert('main_jadwal',$dataMain);
        $this->db->insert('order_book',$dataOrder);
        redirect('user','refresh');
      }else{
        redirect('user/book');
      }
      
      
  }

    function flashDelete(){
      $this->session->set_flashdata('pesan_dihapus', "<script>
      Swal.fire({
        icon:'success',
        title:'Success',
        text: 'Data has been deleted',
        type : 'success',
        showConfirmButton: false,
        timer:1000
      })
      </script>");
    }

    function del($user,$id){
      $this->db->where('id',$id);
      $this->db->delete('jadwal_user'.$user);
    }


    function edit($user,$id){
      $namaJadwal = $this->input->post('nama-jadwal-'.$id);
      $timeJadwal = $this->input->post('waktu-jadwal-'.$id);
      $akhirJadwal = $this->input->post('sampai-jadwal-'.$id);
      $tempat = $this->input->post('tempat-'.$id);
      $tanggal = $this->input->post('tanggal-'.$id);
      $data = [
        'nama_jadwal' => $namaJadwal,
        'waktu_jadwal'=> $timeJadwal,
        'akhir_jadwal' => $akhirJadwal,
        'tempat' =>$tempat,
        'tanggal'=>$tanggal
      ];
      $this->db->where('id',$id);
      $this->db->update('jadwal_user'.$user,$data);
      if ($this->db->affected_rows()>0){
        $this->session->set_flashdata('pesan_diedit', "<script>
        Swal.fire({
          icon:'success',
          title:'Success',
          text: 'Data has been updated',
          type : 'success',
          showConfirmButton: false,
          timer:1000
        })
        </script>");
        redirect('user','refresh');
      }
    }
}
  ?>
