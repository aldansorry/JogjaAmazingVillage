<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objekwisata_model extends CI_Model {

  var $table = "objek_wisata";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('id');
    return $this->db->get()->result();
  }

  public function insert_data($foto)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'nama' => $this->input->post('nama'),
      'keterangan' => $this->input->post('keterangan'),
      'harga' => $this->input->post('harga'),
      'jam_kunjung' => $this->input->post('jam_kunjung'),
      'foto' => $foto,
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
