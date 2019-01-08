<div class="modal-content">
 <div class="modal-header bg-primary">
  <h5 class="modal-title text-white">Tambah Data</h5>
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
  <?php echo form_open_multipart('',array('id'=>'formdata')) ?>
  <div class="form-group row">
    <label for="input-judul" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="input-nama" placeholder="nama" value="<?php echo set_value('nama') ?>">
      <?php echo form_error('nama') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-keterangan" class="col-sm-2 col-form-label">keterangan</label>
    <div class="col-sm-10">
      <input type="textarea" name="keterangan" class="form-control" id="input-keterangan" placeholder="keterangan" value="<?php echo set_value('keterangan') ?>">
      <?php echo form_error('keterangan') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
      <input type="text" name="harga" class="form-control" id="input-harga" placeholder="Harga" value="<?php echo set_value('harga') ?>">
      <?php echo form_error('harga') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-jam_kunjung" class="col-sm-2 col-form-label">Jam Kunjung</label>
    <div class="col-sm-10">
      <input type="text" name="jam_kunjung" class="form-control" id="input-jam_kunjung" placeholder="jam_kunjung" value="<?php echo set_value('jam_kunjung') ?>">
      <?php echo form_error('jam_kunjung') ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-fk_kategori" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
      <select name="fk_kategori" id="" class="form-control">
        <?php foreach ($kategori as $value): ?>
          <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="input-foto" class="col-sm-2 col-form-label">foto</label>
    <div class="col-sm-10">
      <img src="" alt="" id="img-preview">
     <input type="file" name="foto" class="form-control" id="input-foto" placeholder="foto">
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
    url: "<?php echo base_url('Admin/Objekwisata/insert') ?>",
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
 function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#input-foto").change(function() {
  readURL(this);
});
</script>