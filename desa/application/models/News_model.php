<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

  var $table = "news";
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
      'tanggal' => $this->input->post('tanggal'),
      'judul' => $this->input->post('judul'),
      'isi' => $this->input->post('isi'),
      'author' => $this->input->post('author'),
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
