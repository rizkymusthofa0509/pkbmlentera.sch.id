<div class="right_col" role="main">
          
 

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
         
        <div class="x_content">
            
            <div class="row top_tiles">
              
              <div class="row top_tiles">
              
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-credit-card"></i></div>
                  <div class="count">
                    <?php $total_kip = 0; ?>
                    <?php foreach ($siswa->result() as $data): ?>
                          <?php
                            if ($data->kps=="1"){
                               $total_kip = $total_kip+1; 
                            }
                          ?>
                    <?php endforeach ?>
                    <?= rupiah($total_kip); ?>
                  </div>
                  <h3>Penerima KIP</h3>
                </div>
              </div> 
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-male"></i></div>
                  <div class="count">
                     <?php $total_gender_l = 0; ?>
                    <?php foreach ($siswa->result() as $data): ?>
                          <?php
                            if ($data->gender=="L"){
                               $total_gender_l = $total_gender_l+1; 
                            }
                          ?>
                    <?php endforeach ?>
                    <?= rupiah($total_gender_l); ?>
                  </div>
                  <h3>Laki-laki</h3>
                </div>
              </div> 
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-female"></i></div>
                  <div class="count">
                    <?php $total_gender_p = 0; ?>
                    <?php foreach ($siswa->result() as $data): ?>
                          <?php
                            if ($data->gender=="P"){
                               $total_gender_p = $total_gender_p+1; 
                            }
                          ?>
                    <?php endforeach ?>
                    <?= rupiah($total_gender_p); ?>
                  </div>
                  <h3>Perempuan</h3>
                </div>
              </div> 
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">
                     <?= rupiah($total_gender_l+$total_gender_p) ?>
                  </div>
                  <h3>Total Peserta</h3>
                </div>
              </div>

            </div>

            </div>

        </div>
      </div>
    </div> 
  </div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-desktop"></i> Data Peserta didik</h2> 
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <?php echo $this->session->flashdata('message'); ?>
           <table id="datatable" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th>Nomor Register</th>
                  <th>Peserta Didik</th>
                  <th>Jenis Kelamin</th>
                  <th>TTL</th>
                  <th>Kewarganegaraan</th>
                  <th>Agama</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($siswa->result() as $data): ?>
                    <tr> 
                      <td><?= $data->regist_key; ?></td>
                      <td>
                        <table width="100%">
                          <tr>
                            <td width="50px;">Nama</td>
                            <td>: <b><?= $data->nama; ?></b></td>
                          </tr>
                          <tr>
                            <td>NIS</td>
                            <td>: <?= $data->nis; ?></td>
                          </tr>
                          <tr>
                            <td>NISN</td>
                            <td>: <?= $data->nisn; ?></td>
                          </tr>
                        </table>
                      </td>
                      <td><?= $data->ID=="L" ? "Laki-laki" : "Perempuan"; ?></td>
                      <td><?= $data->tmp_lahir; ?>, <?= $data->tgl_lahir; ?></td>
                      <td><?= $data->kewarnegaraan; ?></td>
                      <td><?= $data->agama; ?></td>
                      <td align="center">
                        <?php
                          switch ($data->status_regist) {
                            case '1': //Verifed
                            echo '<label class="label label-success">Verified</label>';
                            break; 
                            default: // Non-Verifed
                              echo '<label class="label label-danger">Non-Verified</label>';
                            break;
                          }
                        ?>
                        
                      </td>
                      <td align="center">
                        <a href="<?= base_url() ?>administrator/siswa/edit/<?= $data->ID; ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href="<?= base_url() ?>administrator/siswa/edit/<?= $data->ID; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>                  
                <?php endforeach ?>
              </tbody>
            </table>

        </div>
      </div>
    </div> 
  </div>



</div>