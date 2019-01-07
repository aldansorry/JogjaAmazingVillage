<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

  var $c_name = "Statistik";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Statistik_model");
  }
  public function index()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->load->view('admin/header');
    $this->load->view('admin/statistik/statistik',$data);
    $this->load->view('admin/footer');
  }

  public function getdata()
  {
    $data['data'] = $this->Statistik_model->get_data();
    echo json_encode($data);
  }
  public function insert()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->form_validation->set_rules('jumlah','jumlah','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/statistik/insert',$data);
    }else{
      $this->load->view('admin/statistik/insert',$data);
      $error = $this->Statistik_model->insert_data();
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
    $this->Statistik_model->delete_data($id);
  }
}
