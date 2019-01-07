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
          <label for="input-deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
          <div class="col-sm-10">
           <input type="text" name="deskripsi" class="form-control" deskripsi="input-deskripsi" placeholder="deskripsi" value="<?php echo set_value('deskripsi') ?>">
          <?php echo form_error('deskripsi') ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="input-_lat" class="col-sm-2 col-form-label">_lat</label>
          <div class="col-sm-10">
           <input type="text" name="_lat" class="form-control" _lat="input-_lat" placeholder="_lat" value="<?php echo set_value('_lat') ?>">
          <?php echo form_error('_lat') ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="input-_long" class="col-sm-2 col-form-label">_long</label>
          <div class="col-sm-10">
           <input type="text" name="_long" class="form-control" _long="input-_long" placeholder="_long" value="<?php echo set_value('_long') ?>">
          <?php echo form_error('_long') ?>
          </div>
      </div>

 <div class="form-group row">
          <label for="input-foto" class="col-sm-2 col-form-label">foto</label>
          <div class="col-sm-10">
           <input type="file" name="foto" class="form-control" foto="input-foto" placeholder="foto">
           <?php echo (isset($error) ? $error : "" ) ?>
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
          url: "<?php echo base_url('Admin/desawisata/insert') ?>",
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