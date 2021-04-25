<div class="right_col" role="main">
          

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tambah Paket </h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
           <form class="form-horizontal form-label-left" method="POST" action="<?= base_url() ?>administrator/paket/add_save">
           		<div class="col-md-12 col-sm-12 col-xs-12">
		           	<div class="col-md-12 col-sm-12 col-xs-12 form-group">
		           		<label>ID Registrasi / Nama Siswa</label>
		           		<select class="form-control select2" name="user_id">
		           			<option value="">--Cari Nama--</option>
		           			<?php foreach ($siswa->result() as $r): ?>
		           				<option value="<?= $r->ID ?>"><?= $r->nama ?></option>
		           			<?php endforeach ?>
		           		</select>
		           	</div>
           			
           		</div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <label>Paket Pilihan</label>
                  <select class="form-control select2" name="id_paket">
                    <option value="">--Cari Paket--</option> 
                    <?php foreach ($paketAll->result() as $data): ?>
                      <option value="<?= $data->ID ?>">[<?= ucfirst($data->kode) ?>] <?= strtoupper($data->nama) ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                
              </div>
	           	 
	             
		        <div class="col-xs-12 col-sm-12 col-md-12"> 
			        	<button type="submit" class="btn btn-round btn-primary"><i class="fa fa-search"></i> Tambah</button>
			        	<a href="<?= base_url() ?>administrator/paket/list/a" class="btn btn-round btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
			        </div>  
		        </div>  
 
           </form>

        </div>
      </div>
    </div> 

  </div>
</div>