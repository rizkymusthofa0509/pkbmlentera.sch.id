
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title;?></title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords"    content="event, unica, creative, html">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?= base_url() ?>assets/logo/icon.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/themify-icons.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/animate.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/style.css"/>




</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo">
				<img src="<?= base_url() ?>assets/logo/pkbm.png" alt="PKBM Lentera" style="width: 50%;">
			</a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Jam Kerja:</span>Senin - Minggu: 09:00 - 17:00</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Alamat:</span>Jl. Aira Raya, Kec. Bojong Gede, Bogor.</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a> 
			</div>
			<ul class="main-menu">
				<li class="active"><a href="<?= base_url() ?>">Home</a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="#">Gallery Foto</a></li>
				<li><a href="#">Gallery Video</a></li>
				<li><a href="#">Pengumuman</a></li>
				<li><a href="#">Berita</a></li>
				<li><a href="#">Hubungi Kami</a></li>
				<li><a href="<?= base_url() ?>regist">Daftar Online</a></li>
				<li><a href="<?= base_url() ?>login">Login</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			
			<div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/front/img/hero-slider/1.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle"></div>
								<h2 class="hs-title">PKBM Lentera.</h2>
								<p class="hs-des">Pusat Kegiatan Belajar Mengajar (PKBM) merupakan satu tempat kegiatan belajar mengajar masyarakat yang diarahkan pada pemberdayaan potensi desa khususnya pemberdayaan keterampilan dan unit produksi sesuai dengan potensi setempat..</p>
								<div class="site-btn"><a href="<?= base_url() ?>regist">Daftar Sekarang</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/front/img/hero-slider/2.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle"></div>
								<h2 class="hs-title">PKBM Lentera.</h2>
								<p class="hs-des">.</p>
								<div class="site-btn"><a href="<?= base_url() ?>regist">Daftar Sekarang</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Hero section end -->


	<!-- Counter section  -->
	<section class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="big-icon">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="counter-content">
						<h2>PKBM Lentera</h2>
						<p><i class="fa fa-calendar-o"></i>09:00 - 17:00 WIB</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					 
				</div>
			</div>
		</div>
	</section>
	<!-- Counter section end -->
 
	<!-- Services section -->
	<!-- <section class="service-section spad">
		<div class="container services">
			<div class="section-title text-center">
				<h3>OUR SERVICES</h3>
				<p>We provides the opportunity to prepare for life</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/1.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Art Studio</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/2.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Great Facility</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/3.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Activity Hub</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/4.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Fully Qualified</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/5.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Flexible Schedule</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/6.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Chemistry Lab</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Services section end -->

	
	<!-- Enroll section -->
	<!-- <section class="enroll-section spad set-bg" data-setbg="img/enroll-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="section-title text-white">
						<h3>ENROLLMENT</h3>
						<p>Get started with us to explore the exciting</p>
					</div>
					<div class="enroll-list text-white">
						<div class="enroll-list-item">
							<span>1</span>
							<h5>Contact</h5>
							<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
						</div>
						<div class="enroll-list-item">
							<span>2</span>
							<h5>Consulting</h5>
							<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
						</div>
						<div class="enroll-list-item">
							<span>3</span>
							<h5>Register</h5>
							<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
					<img src="img/encroll-img.jpg" alt="">
				</div>
			</div>
		</div>
	</section> -->
	<!-- Enroll section end -->


	<!-- Courses section -->
	<!-- <section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>OUR COURSES</h3>
				<p>Building a better world, one course at a time</p>
			</div>
			<div class="row">
				
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/1.jpg" alt="">
						<div class="course-cat">
							<span>BUSINESS</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Certificate Course in Writing<br>for a Global Market</h4>
						<h4 class="cource-price">$100<span>/month</span></h4>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/2.jpg" alt="">
						<div class="course-cat">
							<span>Marketing</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Google AdWords: Get More<br> Customers with Search Marketing </h4>
						<h4 class="cource-price">$150<span>/month</span></h4>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/3.jpg" alt="">
						<div class="course-cat">
							<span>DESIGN</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>The Ultimate Drawing Course<br> Beginner to Advanced</h4>
						<h4 class="cource-price">$180<span>/month</span></h4>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/4.jpg" alt="">
						<div class="course-cat">
							<span>DATABASE</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</h4>
						<h4 class="cource-price">$150<span>/month</span></h4>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/5.jpg" alt="">
						<div class="course-cat">
							<span>PROGRAM</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Web Developer Bootcamp<br>Make web  applications</h4>
						<h4 class="cource-price">$250<span>/month</span></h4>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/6.jpg" alt="">
						<div class="course-cat">
							<span>BUSINESS</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>How to Start an Amazon<br>FBA Store on a Tight Budget</h4>
						<h4 class="cource-price">$150<span>/month</span></h4>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Courses section end-->


	<!-- Fact section -->
	<!-- <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-crown"></i>
					</div>
					<div class="fact-text">
						<h2>50</h2>
						<p>YEARS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-briefcase"></i>
					</div>
					<div class="fact-text">
						<h2>80</h2>
						<p>TEACHERS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-user"></i>
					</div>
					<div class="fact-text">
						<h2>500</h2>
						<p>STUDENTS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-pencil-alt"></i>
					</div>
					<div class="fact-text">
						<h2>800+</h2>
						<p>LESSONS</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Fact section end-->


	<!-- Event section -->
	<!-- <section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>OUR EVENTS</h3>
				<p>Our department  initiated a series of events</p>
			</div>
			<div class="row">
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="img/event/1.jpg" alt="">
						<div class="event-date">
							<span>24 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>The dos and don'ts of writing a personal<br>statement for languages</h4>
						<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="img/event/2.jpg" alt="">
						<div class="event-date">
							<span>22 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>University interview tips:<br>confidence won't make up for flannel</h4>
						<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Event section end -->


	<!-- Gallery section -->
	<!-- <div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/gallery/1.jpg">
				<a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg">
				<a class="img-popup" href="img/gallery/2.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
				<a class="img-popup" href="img/gallery/3.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/gallery/5.jpg">
				<a class="img-popup" href="img/gallery/5.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/gallery/8.jpg">
				<a class="img-popup" href="img/gallery/8.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/gallery/4.jpg">
				<a class="img-popup" href="img/gallery/4.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/6.jpg">
				<a class="img-popup" href="img/gallery/6.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/7.jpg">
				<a class="img-popup" href="img/gallery/7.jpg"><i class="ti-plus"></i></a>
			</div>
		</div>
	</div> -->
	<!-- Gallery section -->


	<!-- Blog section -->
	<!-- <section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LATEST NEWS</h3>
				<p>Get latest breaking news & top stories today</p>
			</div>
			<div class="row">
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/blog/1.jpg"></div>
						<div class="blog-content">
							<h4>Parents who try to be their children’s best friends</h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/blog/2.jpg"></div>
						<div class="blog-content">
							<h4>Graduations could be delayed as external examiners</h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/blog/3.jpg"></div>
						<div class="blog-content">
							<h4>Private schools adopt a Ucas style application system</h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/blog/4.jpg"></div>
						<div class="blog-content">
							<h4>Cambridge digs in at the top of university league table</h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Blog section -->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>Dapatkan informasi.</h3>
					<p>Dapatkan berita terbaru seputar PKBM Lentera.</p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn">SUBSCRIBE</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo-light.png" alt="">
						<p>Alamat :<br> PKBM LENTERA Perum Villa Pabuaran Indah <br>Jl Pradana No 25 002/016 <br>Pabuaran Bojonggede <br>Bogor.</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">USEFUL LINK</h6>
					<div class="dobule-link">
						<ul> 
							<li><a href="#">Gallery Foto</a></li>
							<li><a href="#">Gallery Video</a></li>
							<li><a href="#">Pengumuman</a></li>
							<li><a href="#">Berita</a></li>
							<li><a href="#">Hubungi Kami</a></li>
						</ul>
						<ul>
							<li><a href="<?= base_url() ?>regist">Daftar Online</a></li>
							<li><a href="<?= base_url() ?>login">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Nomor Rekening</h6>
					<ul class="recent-post">
						<li>
							<p>0089038431100<br>Bank BJB</p>
							<!-- <span><i class="fa fa-clock-o"></i>24 Mar 2018</span> -->
						</li>
						<!-- <li>
							<p>Open University plans major <br> cuts to number of staff</p>
							<span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
						</li> -->
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><a href="https://www.google.com/maps/dir//pkbm+lentera/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e69e9912c0f02eb:0x6354aa79114a21cd?sa=X&ved=2ahUKEwjFxYeVjJrrAhWIlEsFHaCECjoQ9RcwFHoECBEQEA"><i class="fa fa-map-marker"></i> PKBM Lentera</p></a></li>
						<li><p><a target="_blank" href="https://api.whatsapp.com/send?phone=6281289664626&text=Saya ingin bertanya"><i class="fa fa-phone"></i> +6281289664626</p></a></li>
						<li><p><a target="_blank" href="https://api.whatsapp.com/send?phone=6281394797301&text=Saya ingin bertanya"><i class="fa fa-phone"></i> +6281394797301</p></a></li>
						<li><p><a target="_blank" href="https://api.whatsapp.com/send?phone=6282258581580&text=Saya ingin bertanya"><i class="fa fa-phone"></i> +6282258581580</p></a></li>
						<li><p><i class="fa fa-envelope"></i> info@pkbmlentera.sch.id</p></li>
						<li><p><i class="fa fa-clock-o"></i> Senin - Minggu, 09:00 - 17:00 </p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url() ?>assets/front/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/front/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/front/js/jquery.countdown.js"></script>
	<script src="<?= base_url() ?>assets/front/js/masonry.pkgd.min.js"></script>
	<script src="<?= base_url() ?>assets/front/js/magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/front/js/main.js"></script>
	
</body>
</html>

<div   style="position: fixed;  z-index: 2000;  left: 10px; bottom: 10px;">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=6281289664626&text=Saya ingin bertanya.">
        <img src="https://multifab.co.id/api_codeigniter/wame.png" title="Contact Me" style="width:150px;" >
    </a>
</div>