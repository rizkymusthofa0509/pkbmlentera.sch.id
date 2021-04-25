<div class="right_col" role="main">
          

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tambah Data </h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
           <form class="form-horizontal form-label-left" method="POST" action="<?= base_url() ?>administrator/bank/save">
           		<div class="col-md-12 col-sm-12 col-xs-12">
		           	<div class="col-md-12 col-sm-12 col-xs-12 form-group">
		           		<label>ID Registrasi / Nama Siswa</label>
		           		<select class="form-control select2" name="id_siswa">
		           			<option value="">--Cari Nama--</option>
		           			<?php foreach ($siswa->result() as $r): ?>
		           				<option value="<?= $r->ID ?>"><?= $r->nama ?></option>
		           			<?php endforeach ?>
		           		</select>
		           	</div>
           			
           		</div>
	           	<div class="col-md-6 col-sm-6 col-xs-12">
	           		 
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	              	<label>Pengirim</label>
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Pengirim" name="pengirim_name">
	                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	              </div>
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Nama Bank" name="pengirim_bank">
	                <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
	              </div>

	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Nomor Rekening" name="pengirim_rek">
	                <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
	              </div>

	              
	           	</div>

	           	<div class="col-md-6 col-sm-6 col-xs-12">
	           		 
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	              	<label>Penerima</label>
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Penerima" name="penerima_name">
	                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	              </div>
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Nama Bank" name="penerima_bank">
	                <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
	              </div>

	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Nomor Rekening" name="penerima_rek">
	                <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
	              </div>
 
	           	</div>

	           	<div class="col-xs-12 col-sm-12 col-md-12">
		        	 	<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
		        	 	<label>Keterangan Pembayaran</label>
		                <textarea class="form-control" name="keterangan" placeholder="Berikan penjelasan pembayaran..."></textarea>
			        </div>  
		        </div> 
		        
		        <div class="col-xs-12 col-sm-12 col-md-12">
		        	 	<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
		        	 	<label>Nominal</label>
		                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="0" name="nominal">
		                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span> 
			        </div>  
		        </div>  

		        <div class="col-xs-12 col-sm-12 col-md-12">
		        	 	<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
		        	 	<label>Lampiran Bukti Pembayaran</label>
		                <input type="file" class="form-control has-feedback-left" id="inputSuccess4" placeholder="0" name="lampiran">
		                <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span> 
			        </div>  
		        </div>  

		        <div class="col-xs-12 col-sm-12 col-md-12"> 
			        	<button type="submit" class="btn btn-round btn-primary"><i class="fa fa-save"></i> Save</button>
			        	<a href="<?= base_url() ?>administrator/bank" class="btn btn-round btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
			        </div>  
		        </div>  
 
           </form>

        </div>
      </div>
    </div>


  </div>
</div>