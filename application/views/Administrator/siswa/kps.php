<div class="right_col" role="main">
          
  

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-desktop"></i> Penerima Kartu Perlindungan Pintar</h2> 
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
                  <th>Nomor KIP</th> 
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($siswa->result() as $data): ?>
                  <?php
                    if ($data->kps=="1"){
                      ?>

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
                            <td><?= $data->no_kps; ?></td>  
                            <td align="center">
                              <a href="<?= base_url() ?>administrator/siswa/edit/<?= $data->ID; ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a> 
                            </td>
                          </tr>                  

                      <?php
                    }
                  ?>
                <?php endforeach ?>
              </tbody>
            </table>

        </div>
      </div>
    </div> 
  </div>



</div>