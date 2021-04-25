<div class="right_col" role="main">
          
  
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-desktop"></i> Riwayat Pendidikan</h2> 
          <div class="pull-right">
          	<a onclick="window.history.back();" class="btn btn-danger">Kembali</a>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <?php echo $this->session->flashdata('message'); ?>
           <table id="datatable" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Program Pendidikan</th>
                  <th>Tanggal Masuk</th> 
                </tr>
              </thead>
              <tbody>
              	<?php $no=1; foreach ($riwayat->result() as $data): ?>
	                 
	                 <tr>
	                 	<td><?= $no++; ?></td>
	                 	<td>[<?= ucfirst($data->kode); ?>] <?= strtoupper($data->nama); ?></td>
	                 	<td><?= $data->create_at; ?></td>
	                 </tr>
              		
              	<?php endforeach ?>
              </tbody>
            </table>

        </div>
      </div>
    </div> 
  </div>



</div>