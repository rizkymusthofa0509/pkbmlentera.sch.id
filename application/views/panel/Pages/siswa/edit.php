 

<div class="row"> 
<!-- <form action="<?= base_url() ?>apps/employee/act/update" method="POST"> -->
<?php echo form_open_multipart('apps/employee/act/update');?>
	<input type="hidden" name="employee_id" id="employee_id" value="">
	<div class="col-md-4">
		<div class="box box-solid  box-primary" style="border-style: 10px;">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user"></i> Data Peserta didik</h3>
              <!-- Left -->
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <b><i class="fa fa-angle-down"></i	></b></button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="Reload" data-toggle="tooltip" title="Reload">
                  <i class="fa fa-refresh"></i></button> -->
              </div>
              <!-- End Left --> 
            </div>
            <div class="box-body">
              

              <div class="col-md-12" style="margin-top: 20px;">
                 <table width="100%" class="table" border="0" style="margin-left: -20px;"> 
                 	<tr>
                 		<td width="30%" class="bold">Photo</td>
                 		<td width="">
                 			<table width="200px;" border="1">
                 				<tr>
                 					<td height="200px;">
                 						<img id="output" src="<?= base_url() ?>assets/image/no.png" width="100%" height="100%" />
                 					</td>
                 				</tr>
                 			</table>
                 			<input name="photo" type="file" class="btn btn-sm bg-navy" style="border-radius: 0px; width: 200px;" accept="image/*" onchange="loadFile(event)">
						        	<input type="hidden" name="photo_old" value="">
                 		</td>
                 	</tr>
                    <tr>
                        <td class="bold">Paket Program</td>
                        <td class="">
                            <select class="form-control select2me" name="id_paket" id="id_paket" >
                              <?php foreach ($ms_paket->result() as $pkt): ?>
                                <option value="<?= $pkt->ID ?>" <?php if($pkt->ID==$det['id_paket']) ?> ><?= strtoupper($pkt->kode) ?> - <?= strtoupper($pkt->nama) ?></option>
                              <?php endforeach ?>
                             </select> 
                        </td>
                    </tr>
                 	<tr>
                        <td class="bold">Nama Lengkap</td>
                        <td class="">
                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $det['nama'] ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="bold">Tempat Lahir</td>
                        <td class="">
                            <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" value="<?= $det['tmp_lahir'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="bold">Tempat Lahir</td>
                        <td class="">
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $det['tgl_lahir'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="bold">Agama</td>
                        <td class="">
                          <select class="form-control select2me" name="id_agama" id="id_agama" >
                            <?php foreach ($ms_agama->result() as $agama): ?>
                              <option value="<?= $agama->ID ?>" <?php if($agama->ID==$det['id_agama']) ?> > <?= strtoupper($agama->nama) ?></option>
                            <?php endforeach ?>
                           </select>  
                        </td>
                    </tr>
                    <tr>
                        <td class="bold">Tinggi Badan</td>
                        <td class="">
                            <input type="text" name="tinggi_badan" id="tinggi_badan" class="form-control" value="<?= $det['tinggi_badan'] ?>">
                        </td>
                    </tr>
                     <tr>
                        <td class="bold">Berat Badan</td>
                        <td class="">
                            <input type="text" name="berat_badan" id="berat_badan" class="form-control" value="<?= $det['berat_badan'] ?>">
                        </td>
                    </tr>

                 </table>
              </div>

               

            </div> 
          </div> 

	</div>

	<div class="col-md-8">
		<div class="box box-primary box-solid ">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user"></i> Detail informasi</h3>
              <!-- Left -->
              <div class="box-tools pull-right">
                 
              </div>
              <!-- End Left --> 
            </div>
            <div class="box-body">
    			 <!-- Custom Tabs -->
	          <div class="nav-tabs-custom">
	            <ul class="nav nav-tabs">
	              <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#alamat" data-toggle="tab">Alamat</a></li> 
                <li><a href="#kontak" data-toggle="tab">Kontak</a></li> 
                <li><a href="#keluarga" data-toggle="tab">Keluarga</a></li> 
                <li><a href="#Kip" data-toggle="tab">Kip</a></li> 
	              <li><a href="#Lampiran" data-toggle="tab">Lampiran</a></li> 
	                
	            </ul>
	            <div class="tab-content">
	              <!-- <div class="tab-pane" id="kontak">
                    
                </div> -->
	              <div class="tab-pane active" id="profile">
                 <table class="table" width="100%">
                 	<tr>
                 		<td class="bold" width="20%">NIK</td>
                 		<td>
                 			<input type="text" name="nik" id="nik" class="form-control" value=" ">
                 		</td>
                 	</tr> 
                  <tr>
                    <td class="bold" width="20%">NIK</td>
                    <td>
                      <input type="text" name="nik" id="nik" class="form-control" value=" ">
                    </td>
                  </tr> 
                  <tr>
                    <td class="bold" width="20%">NIK</td>
                    <td>
                      <input type="text" name="nik" id="nik" class="form-control" value=" ">
                    </td>
                  </tr> 
                 </table>
	              </div> 
                <div class="tab-pane" id="Lampiran">
                    <table class="table" width="100%">
                      <tr>
                        <td class="bold" width="20%">File</td>
                        <td>
                          <input type="file" name="nik" id="nik" class="form-control" value=" ">
                        </td>
                      </tr>  
                   </table>
                </div>
                <div class="tab-pane" id="Kip">
                    <table class="table" width="100%">
                    <tr>
                      <td class="bold" width="20%">Nama Program</td>
                      <td>
                        <input type="text" name="nik" id="nik" class="form-control" value=" ">
                      </td>
                    </tr> 
                    <tr>
                      <td class="bold" width="20%">Nomor</td>
                      <td>
                        <input type="text" name="nik" id="nik" class="form-control" value=" ">
                      </td>
                    </tr> 
                   </table>
                </div>
	              <div class="tab-pane" id="alamat">
                  <table class="table" width="100%">
                     <tr>
                      <td class="bold">Alamat </td>
                      <td>
                        <textarea class="form-control" name="alamat" id="alamat"> </textarea>
                      </td>
                    </tr>
                    <tr>
                      <td class="bold" width="20%">Dusun</td>
                      <td>
                        <input type="text" name="dusun" id="dusun" class="form-control" value=" ">
                      </td>
                    </tr> 
                    <tr>
                      <td class="bold" width="20%">Kelurahan</td>
                      <td>
                        <input type="text" name="kelurahan" id="kelurahan" class="form-control" value=" ">
                      </td>
                    </tr> 
                    <tr>
                      <td class="bold" width="20%">Kecamatan</td>
                      <td>
                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" value=" ">
                      </td>
                    </tr> 
                    <tr>
                      <td class="bold" width="20%">Kabupaten</td>
                      <td>
                        <input type="text" name="kabupaten" id="kabupaten" class="form-control" value=" ">
                      </td>
                    </tr> 
                    <tr>
                      <td class="bold" width="20%">Provinsi</td>
                      <td>
                        <input type="text" name="provinsi" id="provinsi" class="form-control" value=" ">
                      </td>
                    </tr> 
                    <tr>
                      <td class="bold" width="20%">Kode Pos</td>
                      <td>
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control" value=" ">
                      </td>
                    </tr> 
                    <tr>
                      <td class="bold" width="20%">Jenis Tinggal</td>
                      <td>
                        <input type="text" name="jenis_tinggal" id="jenis_tinggal" class="form-control" value=" ">
                      </td>
                    </tr> 
                     
                   </table>
	                  
	              </div> 
                <div class="tab-pane" id="kontak">
                   <table class="table" width="100%">
                    
                    <tr>
                      <td class="bold" width="20%">Telp</td>
                      <td>
                        <input type="text" name="telp" id="telp" class="form-control" value=" ">
                      </td>
                    </tr>
                    <tr>
                      <td class="bold" width="20%">hp</td>
                      <td>
                        <input type="text" name="hp" id="hp" class="form-control" value=" ">
                      </td>
                    </tr>
                    <tr>
                      <td class="bold" width="20%">email</td>
                      <td>
                        <input type="text" name="email" id="email" class="form-control" value=" ">
                      </td>
                    </tr> 
                     
                   </table>
                </div>
                <div class="tab-pane" id="keluarga">
                    <table class="table" width="100%" border="0">
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Nama</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Nama</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Nik</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Nik</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Agama</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Agama</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Kontak</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Kontak</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Tanggal Lahir</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Tanggal Lahir</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Pekerjaan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Pekerjaan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Penghasilan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Penghasilan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Kebutuhan Khusus</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Kebutuhan Khusus</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Pendidikan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Pendidikan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Keterangan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                        <td width="50%">
                          <table width="100%">
                            <tr>
                              <td class="bold" width="20%">Keterangan</td>
                              <td>
                                <input type="text" name="" id="" class="form-control" style="width: 100%;" value=" ">
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>  
                     
                   </table>
                </div> 
	               

	            </div>
	            <!-- /.tab-content -->
	          </div>
	          <!-- nav-tabs-custom --> 

              <div class="col-md-12">
                <a onclick="window.history.back();" class="btn btn-sm bg-navy" style="border-radius: 0px;"><i class="fa fa-angle-left"></i> Back</a>
                <div class="pull-right">
                  <button class="btn btn-sm bg-green" style="border-radius: 0px;"><i class="fa fa-save"></i> Save</button>
                </div>
              </div>

            </div> 
          </div> 

	</div>
        
</form>     
</div>
<?php  $this->load->view('panel/pages/siswa/ajax'); ?>
 
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

