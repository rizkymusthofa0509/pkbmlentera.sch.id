<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-desktop"></i> <span>PKBM LENTERA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url() ?>assets/image/profile/<?= avatar() ?>" alt="<?= base_url() ?>assets/image/profile/<?= avatar() ?>" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?= $this->session->userdata('nama') ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section"> 
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url() ?>administrator"><i class="fa fa-laptop"></i> Dashboard </a></li>
                  <!-- <li><a href="<?= base_url() ?>administrator/siswa"><i class="fa fa-users"></i> Data Siswa </a></li> -->
                  <li><a><i class="fa fa-users"></i> Data Peserta didik <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>administrator/siswa">Data Siswa</a></li>
                      <li><a href="<?= base_url() ?>administrator/siswa/kps">Penerima Kartu Indonesia Pintar</a></li>
                      <li><a href="<?= base_url() ?>regist" target="_blank">Registrasi Peserta didik baru</a></li>
                      <li><a href="<?= base_url() ?>administrator/varifikasi">Verifikasi Peserta didik baru</a></li>
                      <li><a href="<?= base_url() ?>administrator/email/list">Data Email</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bank"></i> Program Pembelajaran<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>administrator/paket/list/a">Paket A</a></li>
                      <li><a href="<?= base_url() ?>administrator/paket/list/b">Paket B</a></li>
                      <li><a href="<?= base_url() ?>administrator/paket/list/c">Paket C</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= base_url() ?>administrator/bank"><i class="fa fa-money"></i> Bank Transaksi </a></li>
                  <li><a href="<?= base_url() ?>administrator/laporan"><i class="fa fa-file"></i> Laporan Keuangan </a></li>
                  <li><a><i class="fa fa-file"></i> Import/Eksport<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>administrator/import">Import siswa</a></li>
                      <li><a href="<?= base_url() ?>administrator/export">Export Dapodik</a></li>
                    </ul>
                  </li>

                  <h3>Master</h3>
                  <li><a><i class="fa fa-cog"></i> Settings<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- <li><a href="<?= base_url() ?>administrator/agama">Agama </a></li>  -->
                      <!-- <li><a href="<?= base_url() ?>administrator/gelombang">Gelombang Pendaftaran </a></li>  -->
                      <!-- <li><a href="<?= base_url() ?>administrator/pendidikan">Tingkat Pendidikan </a></li>  -->
                      <!-- <li><a href="<?= base_url() ?>administrator/paket">Jenis Paket </a></li>  -->
                      <!-- <li><a href="<?= base_url() ?>administrator/paket">Jenis Paket </a></li>  -->
                      <li><a href="<?= base_url() ?>administrator/users">User Account </a></li> 
                    </ul>
                  </li>
                  
                 
                </ul>
              </div>
               

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>