<div class="right_col" role="main">
          

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-money"></i> Bank Pembayaran </h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
           <form action="<?= base_url() ?>administrator/bank" method="POST">
             <div class="form-group">
               <label>Nomor Pendaftaran / ID Registrasi</label>
               <input type="text" name="nomor_register" class="form-control" placeholder="Nomor Pendaftaran">
             </div>
             <button class="btn btn-primary" name="submit" value="submit"><i class="fa fa-search"></i> Cari data</button>
           </form>

        </div>
      </div>
    </div> 
  </div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-money"></i> Detail Pembayaran</h2>
          <div class="pull-right">
            <a href="<?= base_url() ?>administrator/bank/add" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Buat Pembayaran</a>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <?php echo $this->session->flashdata('message'); ?>
           <table id="datatable" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th width="150px;">Nomor Transaksi</th>
                  <th width="300px;">Data Siswa</th>
                  <th width="200px;">Keterangan</th>
                  <th>Informasi Pengirim</th>
                  <th>Informasi Penerima</th>
                  <th>Nominal</th>
                  <th>Status</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($bank->result() as $r): ?> 
                  <tr>
                    <td>
                      <?= $r->nomor_trx ?><br>
                      <?= tanggal($r->tanggal); ?>
                    </td>
                    <td>
                      ID Registrasi : <b><?= $r->regist_key ?></b><br>
                      Nama Lengkap : <b><?= $r->nama ?></b><br>
                      <a href="<?= base_url() ?>administrator/siswa/detail/<?= $r->id_siswa ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Lihat Detail</a>
                    </td>
                    <td><?= $r->keterangan ?>
                      <br>
                      Lampiran :  <a href="<?= base_url() ?>assets/lampiran/<?= $r->lampiran ?>" target="_blank">download</a>
                    </td>
                    <td>
                      Bank : <b><?= $r->pengirim_bank ?></b><br>
                      Pemilik : <b><?= $r->pengirim_name ?></b><br>
                      Nomor Rek : <b><?= $r->pengirim_rek ?></b><br>
                    </td>
                    <td>
                      Bank : <b><?= $r->penerima_bank ?></b><br>
                      Pemilik : <b><?= $r->penerima_name ?></b><br>
                      Nomor Rek : <b><?= $r->penerima_rek ?></b><br>
                    </td>
                    <td><?= rupiah($r->nominal); ?></td>
                    <td valign="center" align="center">
                      <?php
                        switch ($r->status) {
                          case '1':
                            ?>
                              <label class="label label-success">Complate</label>
                            <?php
                            break;
                          
                          default:
                            ?>
                              <label class="label label-danger">Not-Complate</label>
                            <?php
                            break;
                        }
                      ?>
                    </td>
                    <td align="center">
                      <!-- <a href="<?= base_url() ?>administrator/bank/edit/<?= $r->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> -->
                      <a onclick="return confirm('Hapus data secara permanen ? '); " href="<?= base_url() ?>administrator/bank/delete/<?= $r->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <?= time() ?>

        </div>
      </div>
    </div> 
  </div>



</div>