<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	foreach ($identitas_data as $identitas) {
	?>
		<title>.:: <?php echo $identitas->judul_website; ?> ::.</title>
	<?php
	}
	?>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Brilliance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js') ?> "></script>
	<!-- //js -->
	<!-- pop-up-box -->
	<link href="<?php echo base_url('assets/css/popuo-box.css') ?>" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-up-box -->
	<!-- font-awesome icons -->
	<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header -->
	<div class="header-w3ls-agileinfo">

		<div class="wthree_agile_top_header">
			<div class="logo-agileits">
				<h1><a href="index.php"><img width="45px" src="images/logo.jpg"> <?php foreach ($identitas_data as $identitas) {
																						echo strtoupper($identitas->nama_pemilik);
																					} ?> <i class="fa fa-graduation-cap" aria-hidden="true"></i></a></h1>
			</div>
			<div class="agileits_w3layouts_sign_in">
				<ul>
					<li><a class="active" href="mahasiswa">Login Mahasiswa</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="container">
			<div class="w3layouts_agileits_nav_section">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="w3ls__agileinfo_search">
						<form action="#" method="post">
							<input type="search" name="Search" placeholder="Search here..." required="">
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Beranda</a></li>

								<li><a href="#tentang" class="hvr-rectangle-out scroll">Tentang</a></li>
								<li><a href="#materi" class="hvr-rectangle-out scroll">Materi Kuliah</a></li>
								<li><a href="#dosen" class="hvr-rectangle-out scroll">Dosen</a></li>
								<li><a href="#info" class="hvr-rectangle-out scroll">Info Kampus</a></li>
								<li><a href="#gallery" class="hvr-rectangle-out scroll">Gallery</a></li>
								<li><a href="#kontak" class="hvr-rectangle-out scroll">Kontak</a></li>
							</ul>

						</nav>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="w3ls_banner_section">
		<div class="container">
			<h2>UNIVERSITAS <span><?php foreach ($identitas_data as $identitas) {
										echo strtoupper($identitas->nama_pemilik);
									} ?></span></h2>
			<p> code your life with your style</p>
			<div class="wthree-counter-agile">
				<!--timer-->
				<section class="examples">
					<div class="clearfix"></div>
				</section>
				<!--//timer-->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-down-->
	<div class="wthree_banner_grids">
		<div class="w3ls-heading">
			<h3>Fasilitas Kampus</h3>
			<p class="sub">Unversitas Langit Inspirasi Dilengkapi Dengan Berbagai Fasilitas</p>
		</div><br />
		<div class="container">
			<?php
			foreach ($fasilitas_data as $fasilitas) {
			?>
				<div class="col-md-3 wthree_banner_grid">
					<i class="<?php echo $fasilitas->icon_fasilitas; ?>" aria-hidden="true"></i>
					<h4><?php echo $fasilitas->nama_fasilitas; ?></h4>
					<div class="clearfix"> </div>
				</div>
			<?php
			}
			?>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-down-->
	<!-- banner-bottom -->
	<div class="banner-bottom-agileits" id="tentang">
		<?php
		foreach ($tentang_data as $tentang) {
		?>
			<div class="col-md-5 w3l_banner_bottom_right">
				<img src="<?php echo base_url('/images/tentang_kampus/' . $tentang->gambar) ?>" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-7 w3l_banner_bottom_left">
				<h3><?php echo $tentang->judul_tentangkampus; ?></h3>
				<p><?php echo $tentang->isi_tentangkampus; ?>
					<span><?php echo $tentang->keterangan_tambahan; ?></span>
				</p>
			</div>
			<div class="clearfix"></div>
		<?php
		}
		?>
	</div>
	<!-- //banner-bottom -->
	<!-- services -->
	<div class="services" id="materi">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">Materi Perkuliahan</h3>
				<p class="sub two">Berbagai Materi Perkuliahan Yang Diberikan</p>
			</div>
			<div class="w3layouts-grids">
				<div class="services-right-grids">
					<?php
					foreach ($materiperkuliahan_data as $materiperkuliahan) {
					?>
						<div class="col-sm-4 services-right-grid">
							<br />
							<div class="services-icon hvr-radial-in">
								<i class="<?php echo $materiperkuliahan->icon; ?>" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5><?php echo $materiperkuliahan->judul_materiperkuliahan; ?></h5>
								<p><?php echo $materiperkuliahan->isi_materiperkuliahan; ?></p>
							</div>
						</div>
					<?php
					}
					?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<br /><br />
	<!-- dosen -->
	<div class="team" id="dosen">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Dosen Pengajar</h3>
				<p class="sub">Semua Tenaga Pengajar Merupakan Lulusan Magister.</p>
			</div>
			<div class="w3layouts-grids">
				<?php
				foreach ($dosen_data as $dosen) {
				?>
					<div class="col-md-3 wthree_team_grid">
						<div class="wthree_team_grid1">
							<div class="hover14 column">
								<div>
									<figure><img src="<?php echo base_url('/images/dosen/') . $dosen->photo ?>" alt=" " class="img-responsive" /></figure>
								</div>
							</div>
							<div class="wthree_team_grid1_pos">
								<h4><?php echo $dosen->nama_dosen; ?></h4>
							</div>
						</div>
					</div>
				<?php
				}
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //dosen -->
	<br /><br />
	<!-- Informasi Kampus -->
	<div class="news" id="info">
		<div class="w3ls-heading">
			<h3>Informasi Kampus</h3>
			<p class="sub">Informasi Kampus Terbaru.</p>
		</div>
		<div class="w3layouts-grids">
			<?php
			foreach ($tampilinformasi1_data as $tampilinformasi1) {
			?>
				<div class="col-md-5 news-agileits-right news2">
					<i><?php echo $tampilinformasi1->hari . ", " . tgl_indo($tampilinformasi1->tanggal); ?></i>
					<p><?php echo substr($tampilinformasi1->isi_informasi, 0, 150)  ?>...</p>
					<img src="<?php echo base_url('/assets/images/f3.jpg') ?>" alt="image">
					<h6><?php echo $tampilinformasi1->username  ?></h6>
				</div>
				<div class="col-md-6 news-agileits-left video2">
					<img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi1->gambar ?>" style="min-height: 413px; position: relative; width: 100%;" alt="image">
					<div class="button">
						<a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
					</div>
					<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
						<div class="agileits_modal_body">
							<section>
								<div class="modal-body">
									<h3 class="agileinfo_sign"><?php echo $tampilinformasi1->judul_informasi; ?></h3>
									<p><strong>Kategori : </strong><?php echo $tampilinformasi1->nama_kategori; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Diposting oleh : </strong><?php echo $tampilinformasi1->username; ?></p>
									<img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi1->gambar ?>" alt=" " class="img-responsive" />
									<p><?php echo $tampilinformasi1->isi_informasi; ?></p>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			<?php
			}

			foreach ($tampilinformasi2_data as $tampilinformasi2) {
			?>
				<div class="col-md-6 news-agileits-left">
					<img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi2->gambar ?>" style="min-height: 376px; position: relative; width: 100%;" alt="image">
					<div class="button">
						<a href="#small-dialog" class="play-icon popup-with-zoom-anim"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
					</div>
					<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
						<div class="agileits_modal_body">
							<section>
								<div class="modal-body">
									<h3 class="agileinfo_sign"><?php echo $tampilinformasi2->judul_informasi; ?></h3>
									<p><strong>Kategori : </strong><?php echo $tampilinformasi2->nama_kategori; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Diposting oleh : </strong><?php echo $tampilinformasi2->username; ?></p>
									<img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi2->gambar ?>" alt=" " class="img-responsive" />
									<p><?php echo $tampilinformasi2->isi_informasi; ?></p>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="col-md-5 news-agileits-right">
					<i><?php echo $tampilinformasi2->hari . ", " . tgl_indo($tampilinformasi2->tanggal); ?></i>
					<p><?php echo substr($tampilinformasi2->isi_informasi, 0, 150)  ?>...</p>
					<img src="<?php echo base_url('/assets/images/f3.jpg') ?>" alt="image">
					<h6><?php echo $tampilinformasi2->username  ?></h6>
				</div>
				<div class="clearfix"></div>
			<?php
			}
			?>
		</div>
	</div>
	<!-- //Informasi Kampus -->
	<br /><br />
	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="w3ls-heading">
			<h3>Gallery Unversitas</h3>
			<p class="sub">Seputar Kampus, Kegiatan Dan Lomba.</p>
		</div>
		<div class="w3layouts-grids gal-wthree-agileits">
			<div id="jzBox" class="jzBox">
				<div id="jzBoxNextBig"></div>
				<div id="jzBoxPrevBig"></div>
				<img src="#" id="jzBoxTargetImg" alt="" />
				<div id="jzBoxBottom">
					<div id="jzBoxTitle"></div>
					<div id="jzBoxMoreItems">
						<div id="jzBoxCounter"></div>
						<i class="arrow-left" id="jzBoxPrev"></i>
						<i class="arrow-right" id="jzBoxNext"></i>
					</div>
					<i class="close" id="jzBoxClose"></i>
				</div>
			</div>
			<div class="gallery-grids-row">
				<?php
				foreach ($tampilgallery_data as $gallery) {
				?>
					<div class="col-md-3 gallery-grid">
						<div class="wpf-demo-4">
							<a href="<?php echo base_url('/images/gallery/') . $gallery->gambar ?>" class="jzBoxLink item-hover" title="<?php echo $gallery->judul_gallery ?>">
								<img src="<?php echo base_url('/images/gallery/') . $gallery->gambar ?>" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Full View</p>
								</div>
							</a>
						</div>
					</div>
				<?php
				}
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //gallery -->
	<br />
	<!-- contact -->
	<div class="contact" id="kontak">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Kontak Kami</h3>
				<p class="sub">Silahkan Kontak Kami Untuk Informasi Lebih Lanjut.</p>
			</div>
			<div class="w3layouts-grids">
				<div class="col-md-4 contact-left">
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Alamat</h5>
							<?php
							foreach ($identitas_data as $identitas) {
							?>
								<p><?php echo $identitas->judul_website ?><br>
									<span><?php echo $identitas->alamat ?></span>
								</p>
							<?php
							}
							?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-phone-square" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Mobile</h5>
							<ul>
								<?php
								foreach ($identitas_data as $identitas) {
								?>
									<li><?php echo $identitas->telp ?></li>
								<?php
								}
								?>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>E-Mail</h5>
							<ul>
								<?php
								foreach ($identitas_data as $identitas) {
								?>
									<li><a href="mailto:<?php echo $identitas->email ?>"><?php echo $identitas->email ?></a></li>
								<?php
								}
								?>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-8 contact-form">
					<form action="<?php echo $action; ?>" method="post">
						<input type="text" name="nama" placeholder="Nama" required="">
						<input type="email" class="email" name="email" placeholder="Email" required="">
						<div class="clearfix"> </div>
						<input type="text" class="telp" name="telp" placeholder="Nomor Telpon" required="">
						<textarea placeholder="pesan" name="pesan" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->


	<!-- Footer -->
	<div class="footer w3ls">
		<div class="container">
			<div class="newsletter-agile">
				disini diisi banner iklan atau parner
			</div>
			<div class="footer-main">
				<div class="footer-top">
					<div class="col-md-4 ftr-grid fg1">
						<h3><a href="index.html"><span><img width="30px" src="images/logo.jpg"></span>&nbsp;<?php foreach ($identitas_data as $identitas) {
																												echo strtoupper($identitas->nama_pemilik);
																											} ?> </a></h3>
						<p>STMIK Mardira Indonesia merupakan website yang dibuat menggunakan Framework CodeIgniter oleh Teknik Infomatika S1 - Rekayasa Perangkat Lunak</p>
					</div>
					<div class="col-md-4 ftr-grid fg2 mid-gd">
						<h3>Alamat</h3>
						<div class="ftr-address">
							<div class="local">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="ftr-text">
								<p>
									<?php
									foreach ($identitas_data as $identitas) {

										echo $identitas->alamat;
									}
									?>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="ftr-address">
							<div class="local">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="ftr-text">
								<p>
									<?php
									foreach ($identitas_data as $identitas) {

										echo $identitas->telp;
									}
									?>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="ftr-address">
							<div class="local">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="ftr-text">
								<p>
									<?php
									foreach ($identitas_data as $identitas) {

									?>
										<a href="mailto:<?php echo $identitas->email; ?>"><?php echo $identitas->email; ?></a>
									<?php
									}
									?>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
					<div class="col-md-4 ftr-grid fg2">
						<h3>Social Media</h3>
						<div class="right-w3l">
							<ul class="top-links">
								<?php
								foreach ($identitas_data as $identitas) {

								?>
									<li><a href="<?php echo $identitas->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo $identitas->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
								<?php
								}
								?>
							</ul>
						</div>
						<div class="right-w3-2">
							<ul class="text-w3">
								<li><a href="<?php echo $identitas->facebook; ?>">Facebook</a></li>
								<li><a href="<?php echo $identitas->twitter; ?>">Twitter</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="copyrights">
					<p>&copy; <?php echo date("Y"); ?> <?php foreach ($identitas_data as $identitas) {
															echo "<a href='http://langitinspirasi.co.id/' target='_blank'>" . $identitas->judul_website . "</a>";
														} ?>. All Rights Reserved</p>
				</div>
			</div>
		</div>

	</div>



	<!-- Footer -->

	<!-- start-smoth-scrolling -->

	<!-- js -->
	<!--//pop-up-box -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>
	<!--pop-up-box -->
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.js') ?>" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box -->

	<!-- //js -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js') ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script src="<?php echo base_url('assets/js/jzBox.js') ?>"></script>



	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
</body>

</html>