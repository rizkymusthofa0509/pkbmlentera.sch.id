<div class="right_col" role="main">
          

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-money"></i> Bank Pembayaran </h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
           <form action="<?= base_url() ?>administrator/laporan" method="POST">
             	
             		<div class="col-md-12 col-sm-12 col-xs-12">
	           		 
		              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		                <input type="date" class="form-control has-feedback-left" id="" placeholder="Nama Bank" name="dari" value="<?= DATE("Y-m-d") ?>">
		                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
		              </div>

		              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		                <input type="date" class="form-control has-feedback-left" id="" placeholder="Nomor Rekening" name="sampai" value="<?= DATE("Y-m-d") ?>">
		                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
		              </div>

		              
		           	</div>

		           	<div class="col-md-12 col-sm-12 col-xs-12">
	           		 
		              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		                <button class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
		              </div>
		              
		           	</div>

           </form>

        </div>
      </div>
    </div> 
  </div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-desktop"></i> Monitoring </h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
            <div class="row top_tiles">
              
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count">
                  	<?php $total_p = 0; ?>
                  	<?php foreach ($transaksi->result() as $r): ?> 
		                <?php $total_p = $total_p+$r->nominal; ?>
	              	<?php endforeach ?>
	              	<?= rupiah($total_p); ?>
                  </div>
                  <h3>Pemasukan /Periode</h3>
                </div>
              </div> 
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color: #38e861;">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count">
                  	<?php $total = 0; ?>
                  	<?php foreach ($transaksi_tot->result() as $r): ?>
		                <?php $total = $total+$r->nominal; ?>
	              	<?php endforeach ?>
	              	<?= rupiah($total); ?>
                  </div>
                  <h3>Total Pemasukan</h3>
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
          <h2> <i class="fa fa-desktop"></i> Monitoring Keuangan</h2> 
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <?php echo $this->session->flashdata('message'); ?>
           <table id="datatable" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th  width="10px;">No</th>
                  <th  width="100px;">Tanggal</th>
                  <th  width="500px;">Keterangan</th>
                  <th >Nominal</th>
                  <th >Status</th>
                </tr>
              </thead>
              <tbody>
          		<?php $no=1; ?>
              	<?php foreach ($transaksi->result() as $r): ?>
	                <tr>
	                  <td><?= $no++ ?></td>
	                  <td><?= $r->tanggal ?></td>
	                  <td><?= $r->keterangan ?></td>
	                  <td><?= rupiah($r->nominal) ?></td>
	                  <td align="center">
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
	                </tr> 
              	<?php endforeach ?>
              </tbody>
            </table> 

        </div>
      </div>
    </div> 
  </div>



</div>