<div class="right_col" role="main">
 
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
                  <th width="5%">No</th>
                  <th>Nama Peserta</th>
                  <th>Alamat Email</th>
                  <th>Program Pendidikan</th> 
                </tr>
              </thead>
              <tbody>
                 <?php $no=1; foreach ($siswa->result() as $data): ?>
                 	<tr>
                 		<td><?=  $no++;?></td>
                 		<td><?= ucfirst(($data->nama)) ?></td>
                 		<td><?= ucfirst(email($data->ID)) ?></td>
                 		<td><?= ucfirst(paket_sekarang($data->ID)) ?></td>
                 	</tr>
                 <?php endforeach ?>
              </tbody>
            </table>

        </div>
      </div>
    </div> 
  </div>



</div>