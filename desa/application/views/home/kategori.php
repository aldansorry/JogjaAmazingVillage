<div class="sidebar-section category-area">
	<h4 class="title"><b class="light-color">Categories</b></h4>
	<?php foreach ($this->db->get('kategori')->result() as $value): ?>
	<a class="category" href="">
		<img src="<?php echo base_url('uploads/kategori/'.$value->foto); ?>" alt="Category Image">
		<h6 class="name"><?php echo $value->nama ?></h6>
	</a>
<?php endforeach ?>
						</div><!-- sidebar-section category-area -->