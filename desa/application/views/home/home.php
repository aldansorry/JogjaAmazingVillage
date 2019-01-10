
<!-- End Header Area -->	
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-10">
				<h5 class="text-uppercase">Now you can watch the Talent</h5>
				<h1>
					Let’s Explore Idea!				
				</h1>
				<a href="#" class="primary-btn text-uppercase">Explore Now</a>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start portfolio-area Area -->	
<section class="portfolio-area section-gap" id="portfolio">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">This is what we can do for you</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>

		<div class="filters">
			<ul>
				<li class="active" data-filter="*">All</li>
				<?php foreach ($kategori as $value): ?>
					<li data-filter="<?php echo '.'.$value->id ?>"><?php echo ucfirst($value->nama) ?></li>
				<?php endforeach ?>
			</ul>
		</div>

		<div class="filters-content">
			<div class="row grid">
				<?php foreach ($objekwisata as $value): ?>
					<div class="single-portfolio col-sm-4 all <?php echo $value->fk_kategori ?>">
						<div class="item">
							<img src="<?php echo base_url("uploads/objekwisata/".$value->foto) ?>" alt="Work 1">
							<div class="p-inner">
								<h4><?php echo $value->nama ?></h4>
								<div class="cat">Corporate</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>


			</div>
		</div>

	</div>
</section>
<!-- End portfolio-area Area -->	


<!-- Start service Area -->
<section class="service-area section-gap relative" id="service">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10 text-white">Agenda</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>	
	</div>	
</section>
<!-- End service Area -->

<!-- Start services Area -->
<section class="services-area pb-100">
	<div class="container">
		<div class="row">
			<?php foreach ($agenda as $value): ?>
				<div class="col-lg-4">
					<div class="single-service">
						<img class="img-fluid" src="<?php echo base_url("assets_home/") ?>img/s1.png" alt="">
						<h4>Agenda 1</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
						</p>
					</div>
				</div>
			<?php endforeach ?>													
		</div>
	</div>	
</section>
<!-- End services Area -->

<section class="review-area section-gap" id="galeri">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Galeri</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>							
		<div class="row gallery-item">
			<?php foreach ($galeri as $value): ?>
				<div class="col-md-4">
				<a href="<?php echo base_url('assets_home/') ?>img/elements/g1.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(<?php echo base_url('assets_home/'); ?>img/elements/g1.jpg);"></div></a>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</section>


<section class="service-area section-gap relative" id="news">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10 text-white">News</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>	
	</div>	
</section>

<div class="container">
	<div class="section-top-border">
		<h3 class="mb-30">Left Aligned</h3>
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo base_url('assets_home/') ?>img/elements/d.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-9 mt-sm-20">
				<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
			</div>
		</div>
	</div>

</div>

<!-- Start review Area -->
<section class="review-area section-gap" id="testimonial">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">How Our Customers Treat Us</h1>
					<p>Who are in extremely love with eco friendly system..</p>
				</div>
			</div>
		</div>							
		<div class="row">
			<div class="col-lg-6">
				<div class="single-review">
					<img src="<?php echo base_url("assets_home/") ?>img/c1.png" alt="">
					<div class="title d-flex flex-row">
						<a href="#"><h4>Fannie Rowe</h4></a>									
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>	
				<div class="single-review">
					<img src="<?php echo base_url("assets_home/") ?>img/c3.png" alt="">
					<div class="title d-flex flex-row">
						<a href="#"><h4>Lillie Summers</h4></a>									
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>															
			</div>
			<div class="col-lg-6">
				<div class="single-review">
					<img src="<?php echo base_url("assets_home/") ?>img/c2.png" alt="">
					<div class="title d-flex flex-row">
						<a href="#"><h4>Hulda Sutton</h4></a>									
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-starchecked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>	
				<div class="single-review">
					<img src="<?php echo base_url("assets_home/") ?>img/c4.png" alt="">
					<div class="title d-flex flex-row">
						<a href="#"><h4>Ruth Burns</h4></a>									
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>															
			</div>							
		</div>	
	</div>
</section>
<!-- End review Area -->


<!-- start footer Area -->		


