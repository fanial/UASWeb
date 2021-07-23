<!DOCTYPE html>
<html lang="en">
  
<!-- index-three19:35  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php
	foreach ($identitas_data as $identitas) {
	?>
		<title><?php echo $identitas->judul_website; ?></title>
	<?php
	}
	?>
    <script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <!-- Css Files -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/flaticon.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/slick-slider.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyphoto.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/build/mediaelementplayer.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/color.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/color-three.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="<?php echo base_url('assets/images/logo.png')?>">
  </head>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
        
        <!--// Header \\-->
		<header id="wm-header" class="wm-header-three">

            <!--// TopStrip \\-->
			<div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="wm-login-section">
                            <li><?php foreach ($identitas_data as $identitas) {
								echo strtoupper($identitas->nama_pemilik);
								} ?></li>
                            </ul>
                            <div class="wm-right-section">
                                <ul class="wm-stripinfo">
                                    <li><i class="wmicon-location"></i> <?php echo $identitas->alamat ?></li>
                                    <li><i class="wmicon-technology4"></i> <?php echo $identitas->telp ?></li>
                                    <li><a href="mahasiswa"><i class="fa fa-user"></i> Portal Mahasiswa</a></li>
                                </ul>
                                <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header wm-bgcolor-three">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <a href="#" class="wm-logo"><img width="50px" src="<?php echo base_url('assets/images/logo.png')?>" alt=""></a>
                            <div class="wm-right-section">
                                <!--// Navigation \\-->
                                <nav class="navbar navbar-default">
                                
                                    <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a>
                                    </li>
                                    <li><a href="#materikuliah">Materi Kuliah</a>
                                    </li>
                                    <li><a href="#prodi">Program Studi</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="#ti">Teknik Informatika S1</a></li>
                                            <li><a href="#mi">Manajemen Informatika D3</a></li>
                                            <li><a href="#ka">Komputerisasi Akuntansi D3</a></li>
                                            <li><a href="#tid">Teknik Informatika D3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#informasikampus">Info Kampus</a>
                                    </li>
                                    <li ><a href="#dosen">Dosen</a>
                                    </li>
                                    <li ><a href="#gallery">Gallery</a>
                                    </li>
                                    <li ><a href="#fasilitas">Fasilitas</a>
                                    </li>
                                    <li><a href="#contact">Kontak</a>
                                    </li>
                                  </ul>
                                    </div>
                                </nav>
                                <!--// Navigation \\-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

		</header>
		<!--// Header \\-->

		<!--// Main Banner \\-->
		<div class="wm-main-banner">
            
            <div class="wm-banner-three">
                <div class="wm-banner-three-layer">
                <?php
		            foreach ($tentang_data as $tentang) {
		        ?>
                    <img src="<?php echo base_url('assets/extra-images/banner-view3-1.jpg')?>" alt="bg tentang kampus">
                    <div class="wm-caption-three">
                        <div class="container">
                            <div class="wm-caption-three-inner">
                                <h1><?php echo $tentang->judul_tentangkampus; ?></h1>
                                <p><?php echo $tentang->isi_tentangkampus; ?></p>
                                <a class="wm-discover-btn wm-bgcolor-three" href="#contact">discover us</a>
                            </div>
                        </div>
                        <?php
		                }
		                ?>
                    </div>
                </div>
                <div class="wm-banner-three-layer">
                    <img src="<?php echo base_url('assets/extra-images/conservatory-bg-3.jpg')?>" alt="">
                    <div class="wm-caption-three">
                        <div class="container">
                            <div class="wm-caption-three-inner">
                                <h1>Are you <span>one</span> of the best students here?</h1>
                                <p><?php echo $tentang->keterangan_tambahan; ?></p>
                                <a class="wm-discover-btn wm-bgcolor-three" href="#contact">discover us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</div>
		<!--// Main Banner \\-->

        <!--// Main Content \\-->
		<div class="wm-main-content">

            <div class="wm-main-section wm-checkcourses-full">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12" id="materikuliah">
                            <div class="wm-fancy-title-three">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">Check all</small>
                                    <span class="wm-color-three">Materi Kuliah</span>
                                </div>
                            </div>
						</div>
                        <?php
					        foreach ($materiperkuliahan_data as $materiperkuliahan) {
					    ?>
						<div class="col-sm-4 services-right-grid">
							<br />
							<div class="wm-ctservice-icon wm-color">
								<i class="<?php echo $materiperkuliahan->icon; ?>" aria-hidden="true"></i>
							</div>
							<div class="courses-options">
								<h5><?php echo $materiperkuliahan->judul_materiperkuliahan; ?></h5>
								<p><?php echo $materiperkuliahan->isi_materiperkuliahan; ?></p>
							</div>
						</div>
					    <?php
					    }
					    ?>
                    </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-popular-coursesgrid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12" id="prodi">
                            <div class="wm-fancy-title-three wm-align-center">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">Check All</small>
                                    <span class="wm-color-three">Program Studi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="wm-courses wm-courses-grid">
                                <ul class="row">
                                    <li class="col-md-3" id="ti">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-1.jpg')?>" alt="">
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three">Teknik Informatika S1</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">342</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Rohmat Nur Ibrahim, M.T</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-3" id="mi">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-2.jpg')?>" alt="">
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three">Manajemen Informatika D3</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">399</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Jajat Sudrajat, M.Kom</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-3" id="ka">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-3.jpg')?>" alt=""></a> 
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three">Komputerisasi Akuntansi D3</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">212</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Rinawati, S.Pd, M.M</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-3" id="tid">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-4.jpg')?>" alt=""></a> 
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three">Teknik Informatika D3</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">432</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Heri Wahyudi, M.Kom</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-latest-event-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-three" id="informasikampus">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">Pusat</small>
                                    <span class="wm-color-three">Informasi Kampus</span>
                                </div>
                            </div>
                        </div>
                        <?php
			            foreach ($tampilinformasi1_data as $tampilinformasi1) {
			            ?>
                        <div class="col-md-8">
                            <div class="wm-event wm-event-medium">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <div class="wm-event-medium-wrap">
                                            <figure><a href="#"><img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi1->gambar ?>" alt=""></a> <figcaption class="wm-linkhover"><a data-toggle="modal" data-target="#infokampus" href="#" class="wmicon-link wm-icon-link wm-color-three" ></a></figcaption></figure>
                                            <div class="wm-eventmedium-text">
                                                <h5><a href="#" data-toggle="modal" data-target="#infokampus"><?php echo $tampilinformasi1->judul_informasi; ?></a></h5>
                                                <p><?php echo substr($tampilinformasi1->isi_informasi, 0, 150)  ?> ...</p>
                                                <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i> Show runs <?php echo tgl_indo($tampilinformasi1->tanggal); ?></time>
                                            </div>
                                            <div class="wm-event-time wm-bgcolor-three"><?php echo $tampilinformasi1->hari ;?> </div>
                                        </div>
                                    </li>

                                    <!-- Modal  -->
                                    <div class="modal fade left-modalbox" id="infokampus" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
            
                                                    <div class="wm-modallogin-form wm-login-popup">
                                                        <span class="wm-color"><?php echo $tampilinformasi1->judul_informasi; ?></span>
                                                        <p><strong>Kategori : </strong><?php echo $tampilinformasi1->nama_kategori; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Diposting oleh : </strong><?php echo $tampilinformasi1->username; ?></p>
									                    <img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi1->gambar ?>" alt=" " class="img-responsive" />
									                    <p><?php echo $tampilinformasi1->isi_informasi; ?></p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- Modal Box -->

                                    <?php
			                        } 
                                    foreach ($tampilinformasi2_data as $tampilinformasi2) {
                                    ?>
                                    <li class="col-md-12">
                                        <div class="wm-event-medium-wrap">
                                            <figure><a href="#"><img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi2->gambar ?>" alt=""></a> <figcaption class="wm-linkhover"><a href="#" data-toggle="modal" data-target="#infokampus2" class="wmicon-link wm-icon-link wm-color-three"></a></figcaption> </figure>
                                            <div class="wm-eventmedium-text">
                                                <h5><a href="#" data-toggle="modal" data-target="#infokampus2"><?php echo $tampilinformasi2->judul_informasi; ?></a></h5>
                                                <p><?php echo substr($tampilinformasi2->isi_informasi, 0, 150)  ?> ...</p>
                                                <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i> Show runs <?php echo tgl_indo($tampilinformasi2->tanggal); ?></time>
                                            </div>
                                            <div class="wm-event-time wm-bgcolor-three"><?php echo $tampilinformasi2->hari ;?></div>
                                        </div>
                                    </li>

                                    <!-- Modal  -->
                                    <div class="modal fade left-modalbox" id="infokampus2" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
            
                                                    <div class="wm-modallogin-form wm-login-popup">
                                                        <span class="wm-color"><?php echo $tampilinformasi2->judul_informasi; ?></span>
                                                        <p><strong>Kategori : </strong><?php echo $tampilinformasi2->nama_kategori; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Diposting oleh : </strong><?php echo $tampilinformasi2->username; ?></p>
									                    <img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi2->gambar ?>" alt=" " class="img-responsive" />
									                    <p><?php echo $tampilinformasi2->isi_informasi; ?></p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- Modal Box -->
                                    <div class="clearfix"></div>
			                        <?php
			                        }
			                        ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="wm-event wm-event-featured wm-left-spacer">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure>
                                            <a href="#"><img src="<?php echo base_url('/images/info_kampus/') . $tampilinformasi1->gambar ?>" alt=""></a>
                                            <span class="wm-featured-label"><small>Featured Event</small></span>
                                            <div class="wm-event-time wm-bgcolor-three"><?php echo $tampilinformasi1->hari ;?></div>
                                            
                                        </figure>
                                        <div class="wm-event-featured-text">
                                            <h5><a href="#"><?php echo $tampilinformasi1->judul_informasi; ?></a></h5>
                                            <p><?php echo substr($tampilinformasi1->isi_informasi, 0, 150)  ?> ...</p>
                                            <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i> Show runs <?php echo tgl_indo($tampilinformasi1->tanggal); ?></time>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-12"> <div class="wm-allevents-view"><a href="#" class="wm-bgcolor-three">all events</a></div> </div> -->

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-parallextwo-full">
                <span class="wm-light-transparent wm-more-light-black"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12" id="dosen">
                            <div class="wm-parallex">
                                <h2>Dosen Pengajar</h2>
                                <span>Meet our professional teachers who love to teach you things!</span>
                                <!-- <a class="wm-transparent-button" href="#"><span>see all</span></a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container-fluid">
                    <div class="row">
                    <?php
				    foreach ($dosen_data as $dosen) {
				    ?>
                        <div class="wm-courses wm-modren-courses wm-modren-color">
                            <ul>
                                <li class="col-md-3">
                                    <figure><a href="#"><img src="<?php echo base_url('/images/dosen/') . $dosen->photo ?>" alt=""></a> <h2 class="wm-course-captiontitle"><?php echo $dosen->nama_dosen; ?></h2>
                                    <figcaption>
                                            <h3><a href="#"><?php echo $dosen->nama_dosen; ?></a></h3>
                                            <p>Teknik Informatika S1 - Rekayasa Perangkat Lunak</p>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <?php
				}
				?>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->


            <!--// Main Section \\-->
            <div class="wm-main-section wm-studentslove-full">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-12" id="gallery">
                            <div class="wm-fancy-title-three wm-align-center">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">our latest</small>
                                    <span class="wm-color-three">Gallery</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="wm-gallery">
                            <ul class="row">
                                <?php
				                foreach ($tampilgallery_data as $gallery) {
				                ?>
                                <li class="col-md-3 wordpress">
                                    <figure>
                                        <a href="#"><img src="<?php echo base_url('/images/gallery/') . $gallery->gambar ?>" alt=""></a>
                                        <figcaption>
                                            <div class="wm-gallery-text">
                                                <a href="#" class="wmicon-search wm-icon-gallery"></a>
                                                <h6><?php echo $gallery->judul_gallery ?></h6>
                                            </div>								
                                        </figcaption>											
                                    </figure>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>                  
                        
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            

            <!--// Main Section \\-->
            <div class="wm-main-section wm-contact-service-two-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12" id="fasilitas">
                            <div class="wm-fancy-title-three wm-align-center">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">Check all</small>
                                    <span class="wm-color-three">Fasilitas</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 wm-contact-main wm-contact-main-color">
                            <div class="wm-contact-service-two"
                            
                                <ul class="row">
                                <?php
					                foreach ($fasilitas_data as $fasilitas) {
					                ?>
                                    <li class="col-md-3 services-right-grid">
                                        <span class="wm-ctservice-icon wm-bgcolor-two"><i class="<?php echo $fasilitas->icon_fasilitas; ?>"></i></span>
                                        <!-- <h5 class="wm-color">Address</h5> -->
                                        <p><?php echo $fasilitas->nama_fasilitas;?></p>
                                    </li>
                                </ul>
                                <?php
					            }
					            ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            


		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		<footer id="wm-footer" class="wm-footer-three">

            <!--// Footer Widget \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                            <?php
							foreach ($identitas_data as $identitas) {
							?>
                        <aside class="col-md-3 widget widget_blogpost">
                            <div class="wm-footer-widget-title"><h2>About this web</h2></div>
                            <figure><a href="#"><img src="<?php echo base_url('assets/images/logo.png')?>" alt=""></a> <a href="#" class="wm-hover-link"><i class="wmicon-link wm-color-three"></i></a></figure>
                            <div class="widget-blogpost-text">
                                <h6><a href="#" class="wm-color-three"><?php echo ($identitas->nama_pemilik); ?></a></h6>
                                <p>merupakan website yang dibuat menggunakan Framework CodeIgniter oleh Teknik Infomatika S1 - Rekayasa Perangkat Lunak</p>
                            </div>
                        </aside>
                        <aside class="col-md-3 widget widget_contact_list" id="contact">
                            <div class="wm-footer-widget-title"><h2>Get in Touch</h2></div>
                            <ul>
                                <li><i class="wm-color-three wmicon-location"></i> <?php echo $identitas->alamat ?></li>
                                <li><i class="wm-color-three wmicon-technology4"></i><?php echo $identitas->telp ?></li>
                                <li><i class="wm-color-three wmicon-symbol3"></i> <a href="mailto:<?php echo $identitas->email ?>"><?php echo $identitas->email ?></a>
                                <li class="wm-social-btn"><i class="wm-color-three wmicon-web"></i>
                                    <a href="https://facebook.com/stmik.mardira">facebook</a> <br> 
                                    <a href="https://www.instagram.com/stmikmardira/">instagram</a> <br> 
                                    <a href="https://www.twitter.com/stmikmardira/">twitter</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="col-md-6 widget widget_contact_form">
                            <div class="wm-footer-widget-title"><h2>Contact Form</h2></div>
                            <form action="<?php echo $action; ?>" method="post">
                                <ul>
                                    <li> <input name="nama" type="text" value="Name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }"> </li>
                                    <li> <input class="email" name="email" type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }"> </li>
                                    <li> <input class="telp" name="telp" type="text" value="Nomor Telpon" onblur="if(this.value == '') { this.value ='Nomor Telpon'; }" onfocus="if(this.value =='Nomor Telpon') { this.value = ''; }"> </li>
                                    <li class="wm-textarea-full"> <textarea name="pesan" required="" placeholder="Message"></textarea> </li>
                                    <li class="wm-textarea-full"> <input type="submit" value="Send Message"> </li>
                                </ul>
                            </form>
                        </aside>
                        <?php
							}
							?>
                    </div>
                </div>
            </div>
            <!--// Footer Widget \\-->

            <div class="clearfix"></div>
            <!--// FooterCopyRight \\-->
            <div class="container">
                <div class="row">
                    <div class="wm-copyright-three">
                        <div class="row">
                            <div class="col-md-6">Rekayasa Perangkat Lunak 2020</span> </div>
                            <div class="col-md-6"> <a target="_blank" href="#">All Right Reserved &copy; Teknik Informatika - STMIK Mardira Indonesia</a></p> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->

		</footer>
		<!--// Footer \\-->

	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    

    <!-- ModalSearch Box -->
    <div class="modal fade wm-change-bgcolor" id="ModalSearch" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wm-modallogin-form">
                <span class="wm-color">Search Your KeyWord</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Search"> </li>
                    </ul>
                </form>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalSearch Box -->

	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="<?php echo base_url('assets/script/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/script/modernizr.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.prettyphoto.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.countdown.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/fitvideo.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/skills.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/slick.slider.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/waypoints-min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/build/mediaelement-and-player.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/isotope.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/jquery.nicescroll.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/script/functions.js')?>"></script>
    
  </body>

<!-- index-three20:22  -->
</html>