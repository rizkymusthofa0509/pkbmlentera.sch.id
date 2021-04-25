<div class="right_col" role="main">
          

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tambah Data Account</h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
           <form class="form-horizontal form-label-left" method="POST" action="<?= base_url() ?>administrator/users/save">
           		 
	           	<div class="col-md-6 col-sm-6 col-xs-12">
	           		 
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	              	<label>Data Account</label>
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="E-mail" name="email">
	                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
	              </div>
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Username" name="username">
	                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	              </div>

	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Password" name="password">
	                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
	              </div>

	              
	           	</div>


				<div class="col-md-6 col-sm-6 col-xs-12">
	           		 
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	              	<label>&nbsp;</label>
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Nama Lengkap" name="nama">
	                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	              </div>
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Jabatan" name="level">
	                <span class="fa fa-bank form-control-feedback left" aria-hidden="true"></span>
	              </div>
	              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
	                <input type="text" class="form-control has-feedback-left" id="" placeholder="Nomor HP" name="nomor_hp">
	                <span class="form-control-feedback left" aria-hidden="true">+62</span>
	              </div>
  
	              
	           	</div>
 

		        <div class="col-xs-12 col-sm-12 col-md-12"> 
			        	<button type="submit" class="btn btn-round btn-primary"><i class="fa fa-save"></i> Save</button>
			        	<a href="<?= base_url() ?>administrator/users" class="btn btn-round btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
			        </div>  
		        </div>  
 
           </form>

        </div>
      </div>
    </div>


  </div>
</div>