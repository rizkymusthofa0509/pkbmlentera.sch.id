<div class="row"> 
    <div class="pull-right">
      <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/pages/siswa/filter/a"> 
	      <i class="fa fa-user"></i> Paket A
      </a>
      <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/pages/siswa/filter/b"> 
	      <i class="fa fa-user"></i> Paket B
      </a>
      <a class="btn btn-app" style="border-radius: 0px;" href="<?= base_url() ?>panel/pages/siswa/filter/c"> 
	      <i class="fa fa-user"></i> Paket C
      </a>
    </div>
</div> 



<!-- Content -->

<div class="row"> 
        
          <div class="box box-primary box-solid ">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-bank"></i> Data Peserta Didik</h3>
              <!-- Left -->
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <b><i class="fa fa-angle-down"></i></b></button>
                <button type="button" class="btn btn-box-tool" data-widget="Reload" data-toggle="tooltip" title="Reload">
                  <i class="fa fa-refresh"></i></button>
              </div>
              <!-- End Left --> 
            </div>
            <div class="box-body">
              <div class="col-md-12">
                <a onclick="window.history.back();" class="btn btn-sm bg-navy" style="border-radius: 0px;"><i class="fa fa-angle-left"></i> Back</a>
                <a target="_blank" href="<?= base_url() ?>regist" class="btn btn-sm btn-info" style="border-radius: 0px;"><i class="fa fa-plus"></i> Tambah data</a>
                <div class="pull-right">
                  
                </div>
              </div>

              <div class="col-md-12" style="margin-top: 20px;">
                <table class="dataTables table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px;">No</th>
                  <th>Paket</th>
                  <th>Nama Lengkap</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Jenis Kelamin</th> 
                  <th width="50px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($list->result() as $rlist): ?>
                	<tr>
                      <td><?= $no++ ?></td>
                      <td><?= strtoupper('['.$rlist->paket_kode.'] '.$rlist->paket_nama) ?></td>
                      <td><?= $rlist->nama ?></td>
                      <td><?= $rlist->tmp_lahir ?></td>
                      <td><?= date_idn($rlist->tgl_lahir) ?></td>
                      <td><?= $rlist->agama_nama ?></td>
                      <td><?= $rlist->gender ?></td> 
                      <td>
                        <label class="label label-success"><a href="<?= base_url() ?>panel/pages/siswa/edit/<?= $rlist->ID ?>" title="Test"><i class="fa fa-pencil" style="color: white;"></i></a></label>
                        <!-- <label class="label label-warning"><a href="<?= base_url() ?>panel/pages/siswa/" title="Test"><i class="fa fa-eye" style="color: white;"></i></a></label> -->
                        <label class="label label-danger"><a href="<?= base_url() ?>panel/pages/siswa/delete/<?= $rlist->ID ?>" title="Test"><i class="fa fa-trash" style="color: white;"></i></a></label> 
                      </td>
                    </tr>  	
                <?php endforeach ?>	
                   
                </tbody>
                 
              </table>
              </div>
            </div> 
          </div> 

</div>

<!-- End Content -->