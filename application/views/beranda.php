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
		<title>.:: <?php echo $identitas->judul_website; ?> ::.</title>
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
                                <li><a href="mahasiswa"><i class="fa fa-user"></i> Portal Mahasiswa</a></li>
                            </ul>
                            <div class="wm-right-section">
                                <ul class="wm-stripinfo">
                                    <li><i class="wmicon-location"></i> 2925 Swick Hill Street, Charlotte, NC 28202</li>
                                    <li><i class="wmicon-technology4"></i> +1 984-700-7129</li>
                                    <li><i class="wmicon-time2"></i> Mon - fri: 7:00am - 6:00pm</li>
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
                        <div class="col-md-2"><a href="index-two.html" class="wm-logo"><img src="<?php echo base_url('assets/images/logo-3.png')?>" alt=""></a></div>
                        <div class="col-md-10">
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
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="index-2.html">Education Home V1</a></li>
                                            <li><a href="index-two.html">Education Home V2</a></li>
                                            <li><a href="index-three.html">Education Home V3</a></li>
                                            <li><a href="index-four.html">Education Home V4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">course</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="courses-grid.html">Courses Grid</a></li>
                                            <li><a href="courses-list.html">Courses List</a></li>
                                            <li><a href="courses-detail.html">Courses Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">event</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="event-grid.html">Event Grid</a></li>
                                            <li><a href="event-detail.html">Event Detail</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="#">Dashboard</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="dashboard-courses.html">Courses</a></li>
                                            <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                            <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                            <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                            <li><a href="student-dashboard-settings.html">Settings</a></li>
                                            <li><a href="student-dashboard-statement.html">Statement</a></li>
                                        </ul>
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Pages</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Link 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="blog-list.html">Blog List</a></li>
                                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                                        <li><a href="faq-page.html">Faq Page</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 2</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="ourprofessors.html">Our Professors</a></li>
                                                        <li><a href="our-professsors-detail.html">Our Professsors Detail</a></li>
                                                        <li><a href="typography-elements.html">Typography Elements</a></li>
                                                        <li><a href="courses-list.html">Courses List</a></li>
                                                        <li><a href="courses-grid.html">Courses Grid</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 3</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="courses-detail.html">Courses Detail</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="<?php echo base_url('assets/extra-images/megamenu-frame.jpg')?>" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Shop</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-single-product.html">Shop Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Contact</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Links 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>Artists text</h4>
                                                    <div class="wm-mega-text">
                                                        <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                        <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>sub category widget</h4>
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="<?php echo base_url('assets/extra-images/mega-menuadd.jpg')?>" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                  </ul>
                                    </div>
                                </nav>
                                <!--// Navigation \\-->
                                <span class="wm-header-number">+1 414-899-9949</span>
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
                    <img src="<?php echo base_url('assets/extra-images/banner-view3-1.jpg')?>" alt="">
                    <div class="wm-caption-three">
                        <div class="container">
                            <div class="wm-caption-three-inner">
                                <h1>Students <span>don’t</span> just attend our university.</h1>
                                <p>They discover diverse opportunities to develop talents, & become leaders, to have an impact on our campus.</p>
                                <a class="wm-discover-btn wm-bgcolor-three" href="#">discover us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wm-banner-three-layer">
                    <img src="<?php echo base_url('assets/extra-images/banner-view3-2.jpg')?>" alt="">
                    <div class="wm-caption-three">
                        <div class="container">
                            <div class="wm-caption-three-inner">
                                <h1>Are you <span>one</span> of the best students here?</h1>
                                <p>Medicine, Pharmacy and Physiotherapy for School Leaver, Graduate, Mature and Pharmacy Technician applicants.</p>
                                <a class="wm-discover-btn wm-bgcolor-three" href="#">discover us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wm-banner-three-layer">
                    <img src="<?php echo base_url('assets/extra-images/banner-view3-3.jpg')?>" alt="">
                    <div class="wm-caption-three">
                        <div class="container">
                            <div class="wm-caption-three-inner">
                                <h1>Why <span>don’t</span> start the hard study?</h1>
                                <p>Computer science is the study of computers and their uses, and the field comprises a wide range of subjects.</p>
                                <a class="wm-discover-btn wm-bgcolor-three" href="#">discover us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section wm-checkcourses-full">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
                            <div class="wm-fancy-title-three">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">Check all</small>
                                    <span class="wm-color-three">Our Courses</span>
                                </div>
                            </div>
						</div>
                        <aside class="col-md-4">
                            <div class="widget wm_widget_navlist">
                                <ul>
                                    <li><a href="#">Computer Science</a></li>
                                    <li><a href="#">Biomedical Ethics</a></li>
                                    <li><a href="#">Chemistry</a></li>
                                    <li><a href="#">Cognitive Science</a></li>
                                    <li><a href="#">Biochemistry</a></li>
                                    <li><a href="#">Geology</a></li>
                                    <li><a href="#">Data Analysis & Statistics</a></li>
                                    <li><a href="#">Computer Science</a></li>
                                    <li><a href="#">Biomedical Ethics</a></li>
                                    <li><a href="#">Chemistry</a></li>
                                    <li><a href="#">Biochemistry</a></li>
                                    <li><a href="#">Geology</a></li>
                                </ul>
                            </div>
                        </aside>
                        <div class="col-md-8">
                            <div class="wm-search-courses">
                                <h5 class="wm-color-three">Search Course</h5>
                                <form>
                                    <ul>
                                        <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> </li>
                                        <li>
                                            <div class="wm-apply-select">
                                                <select>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li> <label><input type="submit" value="" class="wm-bgcolor-three"> <i class="wmicon-search"></i></label> </li>
                                    </ul>
                                </form>
                            </div>
                            <div class="wm-courses wm-courses-medium">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/data-seince-1.jpg')?>" alt=""></a> <span>$32</span></figure>
                                        <div class="courses-medium-text">
                                            <h5><a href="#" class="wm-color-three">Data Science & Engineering</a></h5>
                                            <p>You will be introduced to the study of human physiology, human anatomy, pharmacology and neuroscience.</p>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">342</a></li>
                                                <li><i class="wmicon-social6"></i> <a href="#">10</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Anne J.</a></li>
                                                <li><i class="wmicon-time2"></i> <a href="#">1 year</a></li>
                                                <li><i class="wmicon-location"></i> <a href="#">Campus L2</a></li>
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
            <div class="wm-main-section wm-popular-coursesgrid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-three wm-align-center">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">see our</small>
                                    <span class="wm-color-three">popular courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="wm-courses wm-courses-grid">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-1.jpg')?>" alt=""></a> <span>$32</span> <figcaption> <a href="#" class="wm-coursemodren-btn wm-color-three">See course</a> </figcaption> </figure>
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three">Data Science & Engineering</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">342</a></li>
                                                <li><i class="wmicon-social6"></i> <a href="#">10</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Anne J.</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-2.jpg')?>" alt=""></a> <span>Free</span> <figcaption> <a href="#" class="wm-coursemodren-btn wm-color-three">See course</a> </figcaption> </figure>
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three">Fundamentals of Computer Science</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">399</a></li>
                                                <li><i class="wmicon-social6"></i> <a href="#">17</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Jesie M</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-3.jpg')?>" alt=""></a> <span>$37</span> <figcaption> <a href="#" class="wm-coursemodren-btn wm-color-three">See course</a> </figcaption> </figure>
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three">Data Science and Analytics</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">212</a></li>
                                                <li><i class="wmicon-social6"></i> <a href="#">19</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">Kate H.</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/courses-grid-popular-4.jpg')?>" alt=""></a> <span>$45</span> <figcaption> <a href="#" class="wm-coursemodren-btn wm-color-three">See course</a> </figcaption> </figure>
                                        <div class="wm-courses-grid-text">
                                            <h5><a href="#" class="wm-color-three"> CLEP Information Systems</a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a href="#">432</a></li>
                                                <li><i class="wmicon-social6"></i> <a href="#">27</a></li>
                                                <li><i class="wmicon-black"></i> <a href="#">James I</a></li>
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
                            <div class="wm-fancy-title-three">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">apply to our</small>
                                    <span class="wm-color-three">latest events</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="wm-event wm-event-medium">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <div class="wm-event-medium-wrap">
                                            <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/latest-eventpop-1.jpg')?>" alt=""></a> <figcaption class="wm-linkhover"><a href="#" class="wmicon-link wm-icon-link wm-color-three"></a></figcaption> </figure>
                                            <div class="wm-eventmedium-text">
                                                <h5><a href="#">Seminar by Haitham Cruickshank</a></h5>
                                                <p>Over the last 30 years, Nadia Magnenat Thalmann has them worked as a pioneer to model and simulate behaviour.</p>
                                                <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i> Show runs April 12-29.</time>
                                            </div>
                                            <div class="wm-event-time wm-bgcolor-three">Apr <span class="wm-color-three">12</span></div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-event-medium-wrap">
                                            <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/latest-eventpop-2.jpg')?>" alt=""></a> <figcaption class="wm-linkhover"><a href="#" class="wmicon-link wm-icon-link wm-color-three"></a></figcaption> </figure>
                                            <div class="wm-eventmedium-text">
                                                <h5><a href="#">Joint open day with the Mathematics Institute</a></h5>
                                                <p>Open days are held at the Department to provide also the prospective students (and their families/teachers).</p>
                                                <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i> Show runs April 10-24.</time>
                                            </div>
                                            <div class="wm-event-time wm-bgcolor-three">Apr <span class="wm-color-three">10</span></div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-event-medium-wrap">
                                            <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/latest-eventpop-3.jpg')?>" alt=""></a> <figcaption class="wm-linkhover"><a href="#" class="wmicon-link wm-icon-link wm-color-three"></a></figcaption> </figure>
                                            <div class="wm-eventmedium-text">
                                                <h5><a href="#">Luis Barbosa (Universidade do Minho)</a></h5>
                                                <p>Trains, cars and planes - security in the fast lane: The most increasing relevance of cyber security to connected.</p>
                                                <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i> Show runs April 8-19.</time>
                                            </div>
                                            <div class="wm-event-time wm-bgcolor-three">Apr <span class="wm-color-three">8</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-event wm-event-featured wm-left-spacer">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure>
                                            <a href="#"><img src="<?php echo base_url('assets/extra-images/featured-image-1.jpg')?>" alt=""></a>
                                            <div class="wm-event-time wm-bgcolor-three">May <span class="wm-color-three">17</span></div>
                                            <span class="wm-featured-label"><small>Featured Event</small></span>
                                        </figure>
                                        <div class="wm-event-featured-text">
                                            <h5><a href="#">Kurt Jackson: The Great Bees</a></h5>
                                            <p>Kurt Jackson’s art is a celebration of the natural world. Recently he has been inspired by the bees he encounters at home in Cornwall and across the UK.</p>
                                            <time datetime="2008-02-14 20:00" class="wm-color-three"><i class="wmicon-clock2"></i> Show runs May 17-20.</time>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12"> <div class="wm-allevents-view"><a href="#" class="wm-bgcolor-three">all events</a></div> </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-parallextwo-full">
                <span class="wm-light-transparent wm-more-light-black"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-parallex">
                                <h2>University Faculty Professors</h2>
                                <span>Meet our professional teachers who love to teach you things!</span>
                                <a class="wm-transparent-button" href="#"><span>see all</span></a>
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
                        
                        <div class="wm-courses wm-modren-courses wm-modren-color">
                            <ul>
                                <li class="col-md-3">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/modren-courses-5.jpg')?>" alt=""></a> <h2 class="wm-course-captiontitle">John D. Archuleta</h2>
                                        <figcaption>
                                            <h3><a href="#">John D. Archuleta</a></h3>
                                            <p>Crean College of Health and Behavioral Sciences; Department of Health Sciences.</p>
                                            <a href="#" class="wm-course-see-btn">read more</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-3">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/modren-courses-6.jpg')?>" alt=""></a> <h2 class="wm-course-captiontitle">Joseph S. Lane</h2>
                                        <figcaption>
                                            <h3><a href="#">Joseph S. Lane</a></h3>
                                            <p>Our two-year Conservatory education prepares our graduates with the power to impact audiences.</p>
                                            <a href="#" class="wm-course-see-btn">read more</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-3">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/modren-courses-7.jpg')?>" alt=""></a> <h2 class="wm-course-captiontitle">Richard K. Simmons</h2>
                                        <figcaption>
                                            <h3><a href="#">Richard K. Simmons</a></h3>
                                            <p>Our two-year Conservatory education prepares our graduates with the power to impact audiences.</p>
                                            <a href="#" class="wm-course-see-btn">read more</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-3">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/modren-courses-8.jpg')?>" alt=""></a> <h2 class="wm-course-captiontitle">Robert S. David</h2>
                                        <figcaption>
                                            <h3><a href="#">Robert S. David</a></h3>
                                            <p>Our two-year Conservatory education prepares our graduates with the power to impact audiences.</p>
                                            <a href="#" class="wm-course-see-btn">read more</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-studentslove-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-three">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">check why</small>
                                    <span class="wm-color-three">students love us</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"> <video src="<?php echo base_url('assets/build/echo-hereweare.mp4')?>" poster="<?php echo base_url('assets/build/echo-hereweare.jpg')?>" controls="controls" preload="none"></video> </div>
                        <div class="col-md-6">
                            <div class="wm-recent-list-slider">
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/recent-list-1.jpg')?>" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“Studying at you guys brought an added value to my professional life. The courses were very interesting and the professors were.”</p>
                                        <a href="#" class="wm-color-three">-Shelly A. Nunez</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/recent-list-2.jpg')?>" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“Enroll is very unique in terms of the social academic environment.”</p>
                                        <a href="#" class="wm-color-three">-Joseph R. Spence</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/recent-list-3.jpg')?>" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“ The knowledge acquired in several courses could readily be used in my new job responsibilities”</p>
                                        <a href="#" class="wm-color-three">-Pamela M. Blevins</a>
                                    </div>
                                </div>
                                <div class="wm-recent-list-layer">
                                    <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/recent-list-2.jpg')?>" alt=""></a></figure>
                                    <div class="wm-recent-list-text">
                                        <p>“Enroll is very unique in terms of the social academic environment.”</p>
                                        <a href="#" class="wm-color-three">-Joseph R. Spence</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-latestnews-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-three wm-align-center">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">read our</small>
                                    <span class="wm-color-three">latest news</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="wm-blog wm-blog-grid">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/latest-news-grid-1.jpg')?>" alt=""></a>
                                            <figcaption>
                                                <div class="wm-grid-caption">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="News Detail"><i class="wmicon-link"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="3 comments"><i class="fa fa-comments-o"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-blog-grid-text">
                                            <h5><a href="#" class="wm-color-three">Students engage MPs with scientific research</a></h5>
                                            <ul class="blogpost-options">
                                                <li><i class="wmicon-time"></i> April 7, 2016</li>
                                                <li><i class="wmicon-people"></i> <a href="#">Admin</a></li>
                                                <li><i class="fa fa-folder-o"></i> <a href="#">Business</a></li>
                                            </ul>
                                            <p>PhD students from the Faculty of Engineering had the opportunity to present their research.</p>
                                            <a href="#" class="wm-readarticle-btn">read article</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/latest-news-grid-2.jpg')?>" alt=""></a>
                                            <figcaption>
                                                <div class="wm-grid-caption">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="News Detail"><i class="wmicon-link"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="3 comments"><i class="fa fa-comments-o"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-blog-grid-text">
                                            <h5><a href="#" class="wm-color-three">Dr Jem Bloomfield answers the Big Questions</a></h5>
                                            <ul class="blogpost-options">
                                                <li><i class="wmicon-time"></i> April 6, 2016</li>
                                                <li><i class="wmicon-people"></i> <a href="#">Admin</a></li>
                                                <li><i class="fa fa-folder-o"></i> <a href="#">Science</a></li>
                                            </ul>
                                            <p>Dr Jem Bloomfield Assistant Professor Literature in the School of English.</p>
                                            <a href="#" class="wm-readarticle-btn">read article</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/latest-news-grid-3.jpg')?>" alt=""></a>
                                            <figcaption>
                                                <div class="wm-grid-caption">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="News Detail"><i class="wmicon-link"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="3 comments"><i class="fa fa-comments-o"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-blog-grid-text">
                                            <h5><a href="#" class="wm-color-three">How do crisis and opportunity work in unison?</a></h5>
                                            <ul class="blogpost-options">
                                                <li><i class="wmicon-time"></i> April 5, 2016</li>
                                                <li><i class="wmicon-people"></i> <a href="#">Admin</a></li>
                                                <li><i class="fa fa-folder-o"></i> <a href="#">Computer</a></li>
                                            </ul>
                                            <p>“Only a crisis – actual or perceived – produces real change,” wrote Milton Friedman, economist.</p>
                                            <a href="#" class="wm-readarticle-btn">read article</a>
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
            <div class="wm-main-section wm-ourhistorytwo-full">
                <span class="wm-light-transparent wm-more-dark-black"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-5">
                            <div class="wm-history-defoult wm-history-list-color">
                                <h2>Our History</h2>
                                <ul>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="wm-subscribe-form wm-subscribe-color">
                                <h2>Still not convinced? We can help you!</h2>
                                <p>Fill out the form below and we will contact you.</p>
                                <form>
                                    <input type="text" value="Name:" onblur="if(this.value == '') { this.value ='Name:'; }" onfocus="if(this.value =='Name:') { this.value = ''; }">
                                    <input type="email" value="E-mail:" onblur="if(this.value == '') { this.value ='E-mail:'; }" onfocus="if(this.value =='E-mail:') { this.value = ''; }">
                                    <input type="submit" value="Get Advice">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-testimonial-nav-full">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-three wm-align-center">
                                <div class="wm-fancy-title-inner">
                                    <small class="wm-color-three">our latest</small>
                                    <span class="wm-color-three">testimonials</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="wm-testimonial-navslider">
                            <div class="wm-testimonial-navlayer">
                                <img src="<?php echo base_url('assets/images/testimonial-comment.png')?>" alt="">
                                <span class="wm-color-three">I am very happy to be a student at Enroll Campus</span>
                                <p>The biggest challenge in studying with the OU is you’re on your own a lot of the time. You have to motivate yourself and keep going. Then of course balancing the study.</p>
                                <div class="wm-testimonial-image">
                                    <figure><img src="<?php echo base_url('assets/extra-images/testimonial-nav-slider-1.jpg')?>" alt=""> <figcaption><small class="wm-color-three">Joel J. Reynolds</small> <a href="#">www.joelreynolds.com</a> </figcaption></figure>
                                </div>
                            </div>
                            <div class="wm-testimonial-navlayer">
                                <img src="<?php echo base_url('assets/images/testimonial-comment.png')?>" alt="">
                                <span class="wm-color-three">Still not convinced? We can help you!</span>
                                <p>The biggest challenge in studying with the OU is you’re on your own a lot of the time. You have to motivate yourself and keep going. Then of course balancing the study.</p>
                                <div class="wm-testimonial-image">
                                    <figure><img src="<?php echo base_url('assets/extra-images/testimonial-nav-slider-2.jpg')?>" alt=""> <figcaption><small class="wm-color-three">-Joseph R. Spence</small> <a href="#">www.joelreynolds.com</a> </figcaption></figure>
                                </div>
                            </div>
                            <div class="wm-testimonial-navlayer">
                                <img src="<?php echo base_url('assets/images/testimonial-comment.png')?>" alt="">
                                <span class="wm-color-three">I am very happy to be a student at Enroll Campus</span>
                                <p>The biggest challenge in studying with the OU is you’re on your own a lot of the time. You have to motivate yourself and keep going. Then of course balancing the study.</p>
                                <div class="wm-testimonial-image">
                                    <figure><img src="<?php echo base_url('assets/extra-images/testimonial-nav-slider-3.jpg')?>" alt=""> <figcaption><small class="wm-color-three">-Shelly A. Nunez</small> <a href="#">www.joelreynolds.com</a> </figcaption></figure>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-contact-service-two-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12 wm-contact-main wm-contact-main-color">
                            <div class="wm-contact-service-two">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span class="wm-ctservice-icon wm-bgcolor-two"><i class="wmicon-pin"></i></span>
                                        <h5 class="wm-color">Address</h5>
                                        <p>195 Cooks Mine Road Espanola, NM 87532</p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-ctservice-icon wm-bgcolor-two"><i class="wmicon-phone"></i></span>
                                        <h5 class="wm-color">Phone & Fax</h5>
                                        <p>+1 505-753-5656 +1 505-753-4437</p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-ctservice-icon wm-bgcolor-two"><i class="wmicon-letter"></i></span>
                                        <h5 class="wm-color">E-mail</h5>
                                        <p><a href="mailto:name@email.com">Info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="contact-social-icon">
                                <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		<footer id="wm-footer" class="wm-footer-three">

            <!--// NewsLatter \\-->
            <div class="wm-newslatter-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fa fa-paper-plane-o"></i> Sign Up</h2>
                            <p>Subscribe to our newsletter to get the latest news & updates.</p>
                            <form>
                                <input type="text" value="Your E-mail Address" onblur="if(this.value == '') { this.value ='Your E-mail Address'; }" onfocus="if(this.value =='Your E-mail Address') { this.value = ''; }">
                                <input type="submit" value="subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// NewsLatter \\-->

            <!--// Footer Widget \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-3 widget widget_blogpost">
                            <div class="wm-footer-widget-title"><h2>Latest Blog Post</h2></div>
                            <figure><a href="#"><img src="<?php echo base_url('assets/extra-images/blogpost-widget.jpg')?>" alt=""></a> <a href="#" class="wm-hover-link"><i class="wmicon-link wm-color-three"></i></a></figure>
                            <div class="widget-blogpost-text">
                                <h6><a href="#" class="wm-color-three">Students engage MPs with those scientific research</a></h6>
                                <p>PhD students from the Faculty of the Engineering had the opportunity.</p>
                            </div>
                        </aside>
                        <aside class="col-md-3 widget widget_contact_list">
                            <div class="wm-footer-widget-title"><h2>Get in Touch</h2></div>
                            <ul>
                                <li><i class="wm-color-three wmicon-location"></i> 4702 Larry Street <br> New Berlin, WI 53151</li>
                                <li><i class="wm-color-three wmicon-technology4"></i> +1 414-899-9949 <br> +1 414-899-0435</li>
                                <li><i class="wm-color-three wmicon-symbol3"></i> <a href="mailto:name@email.com">info@university.com</a> <a href="mailto:name@email.com">support@enroll.com</a></li>
                                <li class="wm-social-btn"><i class="wm-color-three wmicon-web"></i> <a href="#">facebook</a> <br> <a href="#">linkedin</a> <br> <a href="#">twitter</a></li>
                            </ul>
                        </aside>
                        <aside class="col-md-6 widget widget_contact_form">
                            <div class="wm-footer-widget-title"><h2>Contact Form</h2></div>
                            <form>
                                <ul>
                                    <li> <input type="text" value="Name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }"> </li>
                                    <li> <input type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }"> </li>
                                    <li> <input type="text" value="Subject" onblur="if(this.value == '') { this.value ='Subject'; }" onfocus="if(this.value =='Subject') { this.value = ''; }"> </li>
                                    <li class="wm-textarea-full"> <textarea placeholder="Message"></textarea> </li>
                                    <li class="wm-textarea-full"> <input type="submit" value="Send Message"> </li>
                                </ul>
                            </form>
                        </aside>
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
                            <div class="col-md-6"> <span><i class="wmicon-nature wm-color-three"></i> Barcelona, Spain 2°F / -17°C</span> </div>
                            <div class="col-md-6"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p> </div>
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

    <!-- ModalLogin Box -->
    <div class="modal fade left-modalbox" id="ModalLogin" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wm-modallogin-form wm-login-popup">
                <span class="wm-color">Login or Register</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                        <li> <input type="submit" value="Sign In"> </li>
                    </ul>
                </form>
                <span class="wm-color">or try our socials</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
            </div>
            <div class="wm-modallogin-form wm-register-popup">
                <span class="wm-color">create Your Account today</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Create Account"> </li>
                    </ul>
                </form>
                <span class="wm-color">or signup with your socials:</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Already a member? <a href="#">Sign-in Here!</a></p>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalLogin Box -->

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