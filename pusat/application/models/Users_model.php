<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

  var $table = "users";
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
      'alamat' => $this->input->post('alamat'),
      'telp' => $this->input->post('telp'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'status' => $this->input->post('status'),
      'ket_status' => $this->input->post('ket_status'),
      'foto' => $this->input->post('foto'),
      'fk_level' => $this->input->post('fk_level'),
      'fk_desa_wisata' => $this->input->post('fk_desa_wisata'),
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
