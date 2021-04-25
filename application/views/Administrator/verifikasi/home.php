<div class="right_col" role="main">
          
  

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> <i class="fa fa-desktop"></i> Verifikasi Peserta didik baru</h2> 
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
           <?php echo $this->session->flashdata('message'); ?>
           <form action="<?= base_url() ?>administrator/varifikasi" method="POST" >
	           	 
	           	<div class="form-group">
	           		<label>Cari Nomor Registrasi</label>
	           		<input type="text" name="nomor" class="form-control" value="<?= $nomor; ?>">
	           	</div>
	           	<div class="form-group" <?= $hidden ?> >  
                  <div class="">
                    <label>
                      <input type="checkbox" class="js-switch" <?= $checked; ?> onclick="update_data(this);" /> Verified
                    </label>
                  </div> 
                </div>
           		<div class="form-group">
	           		<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari Data</button>
	           	</div>
           </form> 

        </div>
      </div>
    </div> 
  </div>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	function update_data(get){
		if (get.checked){
			var regist_key = '<?= $nomor ?>';
			var status_regist = 1;
		}else{
			var regist_key = '<?= $nomor ?>';
			var status_regist = 0;
		}
		$.ajax({
          url:'<?php echo base_url() ?>administrator/varifikasi_update',
          type:'POST',
          async:false,
          data:{
            regist_key:regist_key,
			status_regist:status_regist,
          },
          success:function(data){
             alert(response);
          }
        });
	}

	function send_server(get) {
		var regist_key = getElementById('register').value;
		var status_regist = get;
		 
		// $.ajax({
  //         url:'<?php echo base_url() ?>administrator/varifikasi_update',
  //         type:'POST',
  //         async:false,
  //         data:{
  //           regist_key:regist_key,
		// 	status_regist:status_regist,
  //         },
  //         success:function(data){
  //            alert(response);
  //         }
  //       });
	}
</script>