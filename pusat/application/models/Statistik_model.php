<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik_model extends CI_Model {

  var $table = "statistik_pengunjung";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('id');
    return $this->db->get()->result();
  }

  public function insert_data()
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'bulan' => $this->input->post('bulan'),
      'tahun' => $this->input->post('tahun'),
      'jumlah' => $this->input->post('jumlah'),
      'fk_desa_wisata' => $this->input->post('fk_desa_wisata'),
      'fk_users' => $this->input->post('fk_users'),
    ];

    $insert = $this->db->insert($this->table,$set);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }

  public function delete_data($id)
  {
    $this->db->where('id',$id);
    $this->db->delete($this->table);
  }
}
