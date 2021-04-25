<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Pendaftar Hari ini</span>
              <div class="count">
                <?php foreach ($siswa->result() as $d): ?>
                  <?php
                    $pendaftar = 0;
                    if (DATE("Y-m-d",$d->timestamp)==DATE("Y-m-d")){
                      $pendaftar=$pendaftar+1;
                    }
                  ?>
                <?php endforeach ?> 
                    <?= $pendaftar; ?>
              </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Verifikasi</span>
              <div class="count">
                <?php foreach ($siswa->result() as $r): ?>
                  <?php
                    $status_regist = 0;
                    if ($r->status_regist=="88"){
                      $status_regist=$status_regist+1;
                    }
                  ?>
                <?php endforeach ?> 
                    <?= $status_regist; ?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Perempuan</span>
              <div class="count green">
                <?php foreach ($siswa->result() as $r): ?>
                  <?php
                    $gender_p = 0;
                    if ($r->gender=="P"){
                      $gender_p=$gender_p+1;
                    }
                  ?>
                <?php endforeach ?> 
                    <?= $gender_p; ?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Laki-laki</span>
              <div class="count">
                <?php foreach ($siswa->result() as $r): ?>
                  <?php
                    $gender_l = 0;
                    if ($r->gender=="L"){
                      $gender_l=$gender_l+1;
                    }
                  ?>
                <?php endforeach ?> 
                    <?= $gender_l;?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Pendaftar Bulan ini</span>
              <div class="count">
                <?php foreach ($siswa->result() as $d): ?>
                  <?php
                    $pendaftar = 0;
                    if (DATE("Y-m",$d->timestamp)==DATE("Y-m")){
                      $pendaftar=$pendaftar+1;
                    }
                  ?>
                <?php endforeach ?> 
                 <?= $pendaftar; ?>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Siswa</span>
              <div class="count">
                <?= $siswa->num_rows(); ?>
              </div>
            </div>
          </div>
          <!-- /top tiles -->

 

         <!--  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Monitoring <small>Sessions</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  laskdj
                </div>
              </div>
            </div>

 
          </div> -->
        </div>