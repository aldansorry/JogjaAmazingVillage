<div class="modal-content">
     <div class="modal-header bg-primary">
          <h5 class="modal-title text-white">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
      <div class="form-group row">
          <label for="input-nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
           <input type="text" name="nama" class="form-control" nama="input-nama" placeholder="nama" value="<?php echo set_value('nama') ?>">
          <?php echo form_error('nama') ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="input-alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
           <input type="text" name="alamat" class="form-control" alamat="input-alamat" placeholder="alamat" value="<?php echo set_value('alamat') ?>">
          <?php echo form_error('alamat') ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="input-telp" class="col-sm-2 col-form-label">telp</label>
          <div class="col-sm-10">
           <input type="text" name="telp" class="form-control" telp="input-telp" placeholder="telp" value="<?php echo set_value('telp') ?>">
          <?php echo form_error('telp') ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="input-email" class="col-sm-2 col-form-label">email</label>
          <div class="col-sm-10">
           <input type="text" name="email" class="form-control" email="input-email" placeholder="email" value="<?php echo set_value('email') ?>">
          <?php echo form_error('email') ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="input-username" class="col-sm-2 col-form-label">username</label>
          <div class="col-sm-10">
           <input type="text" name="username" class="form-control" username="input-username" placeholder="username" value="<?php echo set_value('username') ?>">
          <?php echo form_error('username') ?>
          </div>
      </div>

        <div class="form-group row">
          <label for="input-password" class="col-sm-2 col-form-label">password</label>
          <div class="col-sm-10">
           <input type="text" name="password" class="form-control" password="input-password" placeholder="password" value="<?php echo set_value('password') ?>">
          <?php echo form_error('password') ?>
          </div>
      </div>

        <div class="form-group row">
          <label for="input-status" class="col-sm-2 col-form-label">status</label>
          <div class="col-sm-10">
           <input type="text" name="status" class="form-control" status="input-status" placeholder="status" value="<?php echo set_value('status') ?>">
          <?php echo form_error('status') ?>
          </div>
      </div>

  <div class="form-group row">
          <label for="input-ket_status" class="col-sm-2 col-form-label">ket_status</label>
          <div class="col-sm-10">
           <input type="text" name="ket_status" class="form-control" ket_status="input-ket_status" placeholder="ket_status" value="<?php echo set_value('ket_status') ?>">
          <?php echo form_error('ket_status') ?>
          </div>
      </div>
 <div class="form-group row">
          <label for="input-foto" class="col-sm-2 col-form-label">foto</label>
          <div class="col-sm-10">
           <input type="file" name="foto" class="form-control" foto="input-foto" placeholder="foto">
           <?php echo (isset($error) ? $error : "" ) ?>
      </div>
  </div>
    <div class="form-group row">
    <label for="input-fk_level" class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
      <select name="fk_level" id="" class="form-control">
        <?php foreach ($level as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
      <div class="form-group row">
    <label for="input-fk_desa_wisata" class="col-sm-2 col-form-label">Desa Wisata</label>
    <div class="col-sm-10">
      <select name="fk_desa_wisata" id="" class="form-control">
        <?php foreach ($desa_wisata as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
 <?php echo form_close(); ?>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-primary" form="formdata">Save changes</button>
</div>

</div>
<script>
     $("form#formdata").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);    

      $.ajax({
          url: "<?php echo base_url('Admin/Users/insert') ?>",
          type: 'POST',
          data: formData,
          success: function (data) {
             $('#modal-content').html(data);
                    reload_table();
        },
        cache: false,
        contentType: false,
        processData: false
   });
 });
</script>