


<div class="row"> 
  <div class="col-md-8">
        <!-- Col Start -->
          <div class="box box-primary box-solid ">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-bank"></i> Modul Akses</h3>
              <!-- Left -->
              <div class="box-tools pull-right">
                 
              </div>
              <!-- End Left --> 
            </div>
            <div class="box-body">
               

              <div class="col-md-12" style="margin-top: 20px;">
                <p class="bold"><i class="fa fa-list"></i> PENERIMAAN PESERTA DIDIK BARU</p>
                <div class="row">
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-calendar"></i> Data Periode
                    </a>
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-server"></i> Verifikasi Peserta
                    </a> 
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-line-chart"></i> Grafik Peserta didik
                    </a> 
                </div> 
                <p class="bold"><i class="fa fa-list"></i> KELOLA DATA SISWA</p>
                <div class="row">
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/pages/siswa">
                      <i class="fa fa-user"></i> Siswa
                    </a>
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-home"></i> Alamat Siswa
                    </a> 
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-envelope-o"></i> E-mail Siswa
                    </a>
                </div> 
                <p class="bold"><i class="fa fa-list"></i> WEB PORTAL</p>
                <div class="row">
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-desktop"></i> Blog
                    </a> 
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-file-image-o"></i> Foto Kegiatan
                    </a> 
                    <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-file-image-o"></i> Vidio Kegiatan
                    </a> 
                     <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/">
                      <i class="fa fa-area-chart"></i> Informasi Website
                    </a> 
                </div> 


              </div>
            </div> 
          </div>
        <!-- Col End  -->
  </div>
  <div class="col-md-4">
    <!-- Col Start -->
          <div class="box box-primary box-solid ">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-users"></i> Pendaftar baru</h3>
              <!-- Left -->
              <div class="box-tools pull-right">
                 
              </div>
              <!-- End Left --> 
            </div>
            <div class="box-body" style="height: 400px;"> 
              <div class="col-md-12" style="margin-top: 20px; height:95%;">
                 <marquee direction = "up" width = "100%" height="100%" scrolldelay="10" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                      
                      <?php foreach ($list->result() as $rlist): ?>
                          <table width="100%" class="" style="border: 1px solid #BFBFBF;
                                background-color: white;
                                box-shadow: 10px 10px 5px #aaaaaa;">
                            <tr>
                              <td colspan="2" align="right">
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?= DATE("Y-m-d",$rlist->timestamp) ?></small>
                              </td> 
                            </tr>
                            <tr>
                              <td class="bold" width="140px;">&nbsp;&nbsp;Nomor Pendaftaran</td>
                              <td><?= $rlist->regist_key ?></td> 
                            </tr> 
                            <tr>
                              <td class="bold" width="140px;">&nbsp;&nbsp;Full Name</td>
                              <td><?= $rlist->nama ?></td> 
                            </tr> 
                            <tr>
                              <td class="bold" width="140px;">&nbsp;&nbsp;Paket</td>
                              <td>[<?= ucfirst($rlist->paket_kode) ?>] <?= $rlist->paket_nama ?></td> 
                            </tr>  
                          </table>
                          <br>
                      <?php endforeach ?>      
                  </marquee>

              </div>
            </div> 
          </div>
        <!-- Col End  -->
  </div>
        
         

</div>
