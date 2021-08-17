
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta Tags-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Title Here-->
    <title><?= webinfo('school_name') ?></title>

    <!--Stylesheets-->
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/meanmenu.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/lightbox.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/css/modal-video.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>temp/home/style.css" />

    <!--Google Fonts-->
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="<?= base_url() ?>temp/home/img/preloader.gif" alt="Preloader" />
    </div>
    <!--Header Area Start-->
    <header>
      <div class="head-area">
        <div class="topbar">
          <!--Topbar Contact Start-->
          <div class="contact-info">
            <span
              ><i class="fas fa-map-marker-alt"></i> <?= webinfo('address') ?></span
            >
            <span><i class="far fa-envelope"></i> <?= webinfo('email') ?></span>
          </div>
          <!--Topbar Contact End-->

          <!--Topbar Navigation Start-->
          <div class="topbar-nav">
            <ul>
              <li>
                <a href="#"><i class="fas fa-unlock-alt"></i> Login</a>
              </li>
              <li>
                <a href="#"><i class="fas fa-user-plus"></i> Register</a>
              </li>
            </ul>
          </div>
          <!--Topbar Navigation End-->
        </div>
      </div>
      <!--Logo Bar Start-->
      <div class="logobar">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-4">
              <div class="logo">
                <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/<?= webinfo('logo') ?>" alt="Logo" /></a> 
              </div>
            </div>
            <div class="col-md-8 col-sm-6 col-8">
              <div class="header-info">
                <div class="header-element">
                  <div class="left-iconbox">
                    <div class="icon">
                      <i class="fas fa-headset"></i>
                    </div>
                    <div class="iconbbox-details">
                      <div class="description">
                        <p>Need any help?</p>
                      </div>
                      <div class="title">
                        <h4><?= webinfo('contact') ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Logo Bar Start-->

      <!--Navigation Bar Start-->
      <div class="nav-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="nav-elements">
                <!--Primary Navigation Start-->
                <div class="primary-nav">
                  <ul>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a href="<?= base_url() ?>home/blog">Berita</a></li>
                    <li class="has-submenu">
                      <a href="#">About</a>
                      <ul class="submenu">
                        <li><a href="<?= base_url() ?>">Visi & Misi</a></li>
                        <li><a href="<?= base_url() ?>">Stuktur Organisasi</a></li>
                      </ul>
                    </li> 
                    <li class="has-submenu">
                      <a href="#">Kegiatan</a>
                      <ul class="submenu">
                        <li><a href="<?= base_url() ?>">Galeri Foto</a></li>
                        <li><a href="<?= base_url() ?>">Galeri Vidio</a></li>
                      </ul>
                    </li> 
                    <li><a href="<?= base_url() ?>home/blog">Contact</a></li> 
                    <li class="has-submenu">
                      <a href="#">PPDB</a>
                      <ul class="submenu">
                        <li><a href="<?= base_url() ?>">Pendaftaran</a></li>
                        <li><a href="<?= base_url() ?>">Cek Status Pendaftaran</a></li>
                      </ul>
                    </li> 
                    <!-- <li class="has-submenu">
                      <a href="index.html">Home</a>
                      <ul class="submenu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index-2.html">Home 2</a></li>
                      </ul>
                    </li> --> 
                  </ul>
                </div>
                <!--Primary Navigation End-->
              </div>
            </div>
             
          </div>
        </div>
        <div class="mobile-nav-container">
          <div class="container">
            <div class="mobile-nav"></div>
          </div>
        </div>
      </div>

      <!--Navigation Bar End-->
    </header>
    <!--Header Area End-->

   <?php $this->load->view($pages) ?>

     
    <!--Subscribe Start-->
    <div class="subscribe bg-primary ptb-50">
      <div class="container">
        <div class="subscribe-title text-center mb-4">
          <h4 class="text-light">Subscribe to get latest updates from us</h4>
        </div>
        <div class="subscribe-form">
          <form action="#" id="subscribe-form">
            <div class="row">
              <div class="col-md-6 offset-md-2">
                <div class="input-group">
                  <input
                    type="email"
                    id="subemail"
                    placeholder="Your Email"
                    class="form-control"
                    required
                  />
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group submit">
                  <button class="btn btn-light rounded" type="submit">
                    Join Now
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--Subscribe End-->

    <!--Footer Start-->
    <div class="footer-light bg-bglight pt-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget widget">
              <h4 class="widget-title">Popular Courses</h4>
              <div class="popular-courses">
                <!--Course Item Start-->
                <div class="course-item">
                  <div class="course-thumb">
                    <img src="<?= base_url() ?>temp/home/img/courses/4.jpg" alt="Image" />
                  </div>
                  <div class="course-info">
                    <div class="title">
                      <h5>
                        <a href="#"
                          >Lorem ipsum dolor sit ami amet conse ctetur.</a
                        >
                      </h5>
                    </div>
                    <div class="meta">
                      <span>By Md Mojib</span>
                    </div>
                  </div>
                </div>
                <!--Course Item End-->
                <!--Course Item Start-->
                <div class="course-item">
                  <div class="course-thumb">
                    <img src="<?= base_url() ?>temp/home/img/courses/5.jpg" alt="Image" />
                  </div>
                  <div class="course-info">
                    <div class="title">
                      <h5>
                        <a href="#"
                          >Duis aute irure dolor in repre hend erit.</a
                        >
                      </h5>
                    </div>
                    <div class="meta">
                      <span>By Md Dalwar</span>
                    </div>
                  </div>
                </div>
                <!--Course Item End-->
                <!--Course Item Start-->
                <div class="course-item">
                  <div class="course-thumb">
                    <img src="<?= base_url() ?>temp/home/img/courses/6.jpg" alt="Image" />
                  </div>
                  <div class="course-info">
                    <div class="title">
                      <h5>
                        <a href="#"
                          >Sed ut pers pici atis unde omnis iste natus.</a
                        >
                      </h5>
                    </div>
                    <div class="meta">
                      <span>By Md Habib</span>
                    </div>
                  </div>
                </div>
                <!--Course Item End-->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <!--Links Widget Start-->
            <div class="footer-widget widget">
              <h4 class="widget-title">Useful Links</h4>
              <div class="links">
                <ul>
                  <li><a href="<?= base_url() ?>">Beranda</a></li>
                  <li><a href="<?= base_url() ?>blog">Berita</a></li>
                  <li><a href="<?= base_url() ?>">Visi & Misi</a></li>
                  <li><a href="<?= base_url() ?>">Struktur Organisasi</a></li>
                  <li><a href="<?= base_url() ?>">Galeri Foto</a></li>
                  <li><a href="<?= base_url() ?>">Galeri Video</a></li>
                  <li><a href="<?= base_url() ?>">Contact</a></li>
                  <li><a href="<?= base_url() ?>">Pendafataran Peserta baru</a></li>
                  <li><a href="<?= base_url() ?>">Cek Status Pendafataran</a></li>
                </ul>
              </div>
            </div>
            <!--Links Widget End-->
          </div>
          <!--Top News Wedget Start-->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget widget">
              <h4 class="widget-title">Top News</h4>
              <div class="top-news">
                <ul>
                  <li>
                    <a href="blog-single.html"
                      >Enim ad minima veniam exercit atio quis nostrum</a
                    >
                    <span
                      ><i class="far fa-calendar-alt"></i> 26 April 2021</span
                    >
                  </li>
                  <li>
                    <a href="blog-single.html"
                      >Quas molestias excepturi sint occaecati cupiditate</a
                    >
                    <span
                      ><i class="far fa-calendar-alt"></i> 10 April 2021</span
                    >
                  </li>
                  <li>
                    <a href="blog-single.html"
                      >Nam libero tempore, cum soluta nobis est elig.</a
                    >
                    <span
                      ><i class="far fa-calendar-alt"></i> 05 April 2021</span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--Top News Wedget Start-->

          <!--Twitter Feed Start-->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget widget">
              <h4 class="widget-title">Twitter Feed</h4>
              <div class="twitter-feed">
                <ul>
                  <li>
                    <span class="title"
                      >Conse ctetur adipi scing elit sed...</span
                    >
                    <a class="link" href="#">https://twitter.com/adskse5we4</a>
                    <span class="time">10 hour ago</span>
                  </li>
                  <li>
                    <span class="title">Maxime placeat facere poss...</span>
                    <a class="link" href="#">https://twitter.com/adfewefgg</a>
                    <span class="time">05 hour ago</span>
                  </li>
                  <li>
                    <span class="title">Ihil impedit quo minus id quod...</span>
                    <a class="link" href="#"
                      >https://twitter.com/efs4fe634sgh</a
                    >
                    <span class="time">03 hour ago</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--Twitter Feed Start-->
        </div>
      </div>
      <div class="footer-bar ptb-15 mt-15">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="footer-logo">
                <img src="<?= base_url() ?>assets/images/<?= webinfo('logo') ?>" alt="Logo" />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" class="facebook" href="<?= webinfo('facebook') ?>"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                  </li>
                  <li>
                    <a target="_blank" class="twitter" href="<?= webinfo('twitter') ?>"
                      ><i class="fab fa-twitter"></i
                    ></a>
                  </li> 
                  <li>
                    <a target="_blank" class="linkedin" href="<?= webinfo('linkedin') ?>"
                      ><i class="fab fa-linkedin"></i
                    ></a>
                  </li>
                  <li>
                    <a target="_blank" class="youtube" href="<?= webinfo('youtube') ?>"
                      ><i class="fab fa-youtube"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer End-->

    <!--Javascripts-->
    <script src="<?= base_url() ?>temp/home/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/jquery-migrate.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/jquery.meanmenu.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/waypoint.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/lightbox.min.js"></script>
    <script src="<?= base_url() ?>temp/home/js/jquery-modal-video.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="<?= base_url() ?>temp/home/js/contact.js"></script>
    <script src="<?= base_url() ?>temp/home/js/custom.js"></script>

    <script>
      $(document).ready(function () {
        $(".js-video-button").modalVideo();
      });
    </script>
  </body>
</html>
