<div class="modal-content">
     <div class="modal-header bg-primary">
          <h5 class="modal-title text-white">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
     </div>
     <div class="modal-body">
          <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
      <div class="form-group row">
          <label for="input-bulan" class="col-sm-2 col-form-label">Bulan</label>
          <div class="col-sm-10">
           <input type="text" name="bulan" class="form-control" bulan="input-bulan" placeholder="bulan" value="<?php echo set_value('bulan') ?>">
          <?php echo form_error('bulan') ?>
          </div>
      </div>
      
      <div class="form-group row">
          <label for="input-tahun" class="col-sm-2 col-form-label">Tahun</label>
          <div class="col-sm-10">
           <input type="text" name="tahun" class="form-control" tahun="input-tahun" placeholder="tahun" value="<?php echo set_value('tahun') ?>">
          <?php echo form_error('tahun') ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="input-jumlah" class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
           <input type="text" name="jumlah" class="form-control" jumlah="input-jumlah" placeholder="jumlah" value="<?php echo set_value('jumlah') ?>">
          <?php echo form_error('jumlah') ?>
          </div>
      </div>

      <div class="form-group row">
        <label for="input-fk_desa_wisata" class="col-sm-2 col-form-label">Desawisata</label>
      <div class="col-sm-10">
      <select name="fk_desa_wisata" id="" class="form-control">
        <?php foreach ($desa_wisata as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
      </div>
      </div>

      <div class="form-group row">
        <label for="input-fk_users" class="col-sm-2 col-form-label">Users</label>
      <div class="col-sm-10">
      <select name="fk_users" id="" class="form-control">
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
          url: "<?php echo base_url('Admin/statistik/insert') ?>",
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