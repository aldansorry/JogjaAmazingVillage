<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objekwisata extends CI_Controller {

	var $c_name = "Objekwisata";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Objekwisata_model");
  }
  public function index()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->load->view('admin/header');
    $this->load->view('admin/objekwisata/objekwisata',$data);
    $this->load->view('admin/footer');
  }
  public function getdata()
  {
    $data['data'] = $this->Objekwisata_model->get_data();
    echo json_encode($data);
  }
  public function insert()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('keterangan','keterangan','required');
    $this->form_validation->set_rules('harga','Harga','required');
    $this->form_validation->set_rules('jam_kunjung','jam_kunjung','required');

    if ($this->form_validation->run() == false) {
      $this->load->view('admin/objekwisata/insert',$data);
    }else{
      $config['upload_path'] = './uploads/objekwisata/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '100';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/objekwisata/insert',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/objekwisata/insert',$data);
        $error = $this->Objekwisata_model->insert_data($upload_data['file_name']);
        if ($error['code'] == 0) {
          echo '<script>swal("Berhasil", "Data berhasil ditambahkan", "success");</script>';
        }else{

          echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
        }
      }
    }
  }
   public function update($id)
  {
//consturct later
  }
  public function delete($id)
  {
    $this->Objekwisata_model->delete_data($id);
  }
}
