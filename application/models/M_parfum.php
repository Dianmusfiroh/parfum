<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_parfum extends CI_Model{
    
    
    public function ambil_data_wanita(){
      $data = $this->db->query("SELECT `id_parfum`, `merek`, `harga`, `stok`, `nama_foto` FROM `t_parfum` WHERE gender = 'wanita'")->result();

        return $data;
  }
  public function data()
  {
    $data = $this->db->query("SELECT * FROM `t_parfum` ")->result();
    return $data;
    
  }
  public function ambil_data_pria(){
    $data = $this->db->query("SELECT `id_parfum`, `merek`, `harga`, `stok`, `nama_foto` FROM `t_parfum` WHERE gender = 'laki-laki'")->result();

    return $data;
  }
  public function update($id){
    $query = $this->db->get_where('t_parfum', array('id_parfum' => $id))->row();
    return $query;
  }

  public function update_data_($data,$query)
  {
    $this->db->where($query);
    $this->db->update('t_parfum',$data);
  }
  
}