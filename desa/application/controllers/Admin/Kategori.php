<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

  var $c_name = "Kategori";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Kategori_model");
  }
  public function index()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->load->view('admin/header');
    $this->load->view('admin/kategori/kategori',$data);
    $this->load->view('admin/footer');
  }

  public function getdata()
  {
    $data['data'] = $this->Kategori_model->get_data();
    echo json_encode($data);
  }
  public function insert()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->form_validation->set_rules('nama','Nama','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/kategori/insert',$data);
    }else{
      $this->load->view('admin/kategori/insert',$data);
      $error = $this->Kategori_model->insert_data();
      if ($error['code'] == 0) {
      echo '<script>swal("Berhasil", "Data berhasil ditambahkan", "success");</script>';
      }else{

      echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
      }
    }
  }

  public function update($id)
  {
//consturct later
  }
  public function delete($id)
  {
    $this->Kategori_model->delete_data($id);
  }
}
