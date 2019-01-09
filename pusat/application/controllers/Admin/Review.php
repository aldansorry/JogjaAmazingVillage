<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

  var $c_name = "Review";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Review_model");
  }
  public function index()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->load->view('admin/header');
    $this->load->view('admin/review/review',$data);
    $this->load->view('admin/footer');
  }

  public function getdata()
  {
    $data['data'] = $this->Review_model->get_data();
    echo json_encode($data);
  }
  public function insert()
  {
    $this->load->model("Desawisata_model");
    $data = [
      'c_name' => $this->c_name,
      'desa_wisata' => $this->Desawisata_model->get_data(),
    ];
    $this->form_validation->set_rules('nama','Nama','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/review/insert',$data);
    }else{
      $this->load->view('admin/review/insert',$data);
      $error = $this->Review_model->insert_data();
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
    $this->Review_model->delete_data($id);
  }
}
