<div class="modal-content">
     <div class="modal-header bg-primary">
          <h5 class="modal-title text-white">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
      <div class="form-group row">
          <label for="input-judul" class="col-sm-2 col-form-label">judul</label>
          <div class="col-sm-10">
           <input type="text" name="judul" class="form-control" judul="input-judul" placeholder="judul" value="<?php echo set_value('judul') ?>">
          <?php echo form_error('judul') ?>
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
          url: "<?php echo base_url('Admin/Galeri/insert') ?>",
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