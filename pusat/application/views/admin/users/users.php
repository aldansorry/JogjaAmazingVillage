
<!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Desa Wisata</h4>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="<?php echo base_url('assets/') ?>assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('logged_in')['nama'] ?> <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Message</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="<?php echo base_url('Login/logout') ?>">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->


<!-- Primary table end -->
<!-- Dark table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Desa Wisata</h4>
            <button type="button" class="btn btn-primary btn-flat mb-3" onclick="input_form();">Tambah Data</button>
            <div class="data-tables datatable-dark">
                <table id="product-table" class="display nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead class="text-capitalize">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Keterangan Status</th>
                            <th>Foto</th>
                            <th>Level</th>
                            <th>Desa Wisata</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

               
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalLong">
    <div class="modal-dialog modal-lg" id="modal-content">

    </div>
</div>
<script>
    $(document).ready(() => {
        $('#product-table').DataTable( {
            "ajax": {
                'url': "<?= base_url('Admin/Users/getdata') ?>",
            },
            "columns": [
            {
                "data": null,
                "visible":true,
                render: (data, type, row, meta) => {

                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "nama" },
            { "data": "alamat" },
            { "data": "telp" },
            { "data": "email" },
            { "data": "username" },
            { "data": "password" },
            { "data": "status" },
            { "data": "ket_status" },
            { "data": "foto" },
            { "data": "fk_level" },
            { "data": "fk_desa_wisata" },
            {
                "data":'id',
                "visible":true,
                render: (data, type, row) => {
                    let ret = "";
                    ret += ' <a href="#" onclick="update_form('+data+'); return false;" class="btn btn-sm btn-rounded btn-success"> <i class="fa fa-pencil"></i> Edit</a>';
                    ret += ' <a href="#" onclick="delete_form('+data+')" class="btn btn-sm btn-rounded btn-danger"> <i class="fa fa-trash"></i> Delete</a>';
                    return ret;
                }
            }
            ]
        } );
    });

    function reload_table() {
        $('#product-table').DataTable().ajax.reload(null,false);
    }

    function input_form() {
        $('#exampleModalLong').modal('show');
        $.ajax({
            url: "<?php echo base_url('Admin/Users/insert') ?>",
            data: null,
            success: function(data)
            {
                $('#modal-content').html(data);
            }
        });
    }
    function update_form(id) {
        $('#exampleModalLong').modal('show');
        $.ajax({
            url: "<?php echo base_url('Admin/Users/update/') ?>"+id,
            data: null,
            success: function(data)
            {
                $('#modal-content').html(data);
            }
        });
    }
     function delete_form(id) {
        swal({
          title: "Apakah anda yakin?",
          text: "Setelah anda menghapus, data ini tidak dapat kembali",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: "<?php echo base_url('Admin/Users/delete/') ?>"+id,
                data: null,
                success: function(data)
                {
                    swal("Data berhasil di hapus", {
                        icon: "success",
                    });
                    reload_table();
                }
            });
            
        } else {
            swal("Data aman");
        }
    });


    }
</script>
