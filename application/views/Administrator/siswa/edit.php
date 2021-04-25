<form action="<?= base_url() ?>administrator/siswa/update" method="POST" class="form-horizontal pb-3">
<div class="right_col" role="main">
          

  <div class="row">
    <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Edit Data Siswa </h2>
                     <div class="pull-right">
                         <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                         <a href="<?= base_url() ?>administrator/siswa" class="btn btn-danger"> Back</a>
                     </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#siswa" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><b>Data Diri Siswa</b></a></li>
                        <li role="presentation" class=""><a href="#ortu" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><b>Data Orang Tua</b></a></li>
                        <li role="presentation" class=""><a href="#alamat" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><b>Alamat</b></a></li>  
                        <li role="presentation" class=""><a href="#kps" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><b>KIP</b></a></li>  
                        <li role="presentation" class=""><a href="#lampiran" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><b>Lampiran</b></a></li>  
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="siswa" aria-labelledby="home-tab">
                          
                           <div class="row">
                               <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap" class="form-control" value="<?= $siswa['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="gender" value="P" <?= $siswa['gender']=="L" ? "checked" : ""; ?>>Pria
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="gender" value="W" <?= $siswa['gender']=="P" ? "checked" : ""; ?>>Wanita
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tmp_lahir" class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat lahir" class="form-control" value="<?= $siswa['tmp_lahir'] ?>">
                                </div>
                                <div class="col-sm-5">
                                    <input type="date" id="" name="tgl_lahir" class="form-control" value="<?= DATE($siswa['tgl_lahir']) ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kewarnegaraan" class="col-sm-2 control-label">Kewarnegaraan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kewarnegaraan" id="kewarnegaraan" value="<?= $siswa['kewarnegaraan'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nik" class="col-sm-2 control-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nik" id="nik" placeholder="Last Name" class="form-control" value="<?= $siswa['nik'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="akta" class="col-sm-2 control-label">No. Akta Kelahiran</label>
                                <div class="col-sm-10">
                                    <input type="text" name="akta" id="akta" placeholder="Last Name" class="form-control" value="<?= $siswa['akta'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nis" class="col-sm-2 control-label">NIS & NISN</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nis" id="nis" placeholder="NIS" class="form-control"  value="<?= $siswa['nis'] ?>">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" name="nisn" id="nisn" placeholder="NISN" class="form-control"  value="<?= $siswa['nisn'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="skhun" class="col-sm-2 control-label">SKHUN</label>
                                <div class="col-sm-10">
                                    <input type="text" name="skhun" id="skhun" placeholder="SKHUN" class="form-control" value="<?= $siswa['skhun'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Agama</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="" name="agama" size="1">
                                        <option>--- Agama ---</option>
                                        <?php foreach ($agama->result() as $res): ?>
                                        <option value="<?= $res->ID?>" <?= $siswa['id_agama']==$res->ID ? "selected" : ""; ?> ><?= $res->nama?></option>
                                        <?php endforeach ?>
                                                
                                    </select>
                                </div>
                            </div>
                            <hr>
                            
                            
                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">Transportasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="transportasi" id="telp" placeholder="Umum/Jalan Kaki/Sepeda" class="form-control" value="<?= $siswa['transportasi'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">Kebutuhan Khusus</label>
                                <div class="col-sm-10">
                                    <input type="text" name="siswa_khusus" id="telp" placeholder="" class="form-control" value="<?= $siswa['kebutuhan_khusus'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">Saudara</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Anak Ke-</span>
                                        <input type="text" name="anak_ke" id="telp" placeholder="1" class="form-control" value="<?= $siswa['anak_ke'] ?>">
                                        <span class="input-group-addon" id="basic-addon1">Dari</span>
                                        <input type="text" name="saudara" id="telp" placeholder="2" class="form-control" value="<?= $siswa['jml_saudara'] ?>">
                                        <span class="input-group-addon" id="basic-addon1">Bersaudara</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">Tinggi & Berat Badan</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" name="tinggi" id="telp" placeholder="Tinggi" class="form-control" value="<?= $siswa['tinggi_badan'] ?>" >
                                        <span class="input-group-addon" id="basic-addon1">cm</span>
                                        <input type="text" name="berat" id="telp" placeholder="Berat" class="form-control" value="<?= $siswa['berat_badan'] ?>" >
                                        <span class="input-group-addon" id="basic-addon1">Kg</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">No. Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" name="telp" id="telp" placeholder="No. Telp" class="form-control" value="<?= $kontak['telp'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hp" class="col-sm-2 control-label">No. Handphone(Whatsapp)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="hp" id="hp" placeholder="No. Handphone" class="form-control" value="<?= $kontak['hp'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?= $kontak['email'] ?>">
                                </div>
                            </div>
                           </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="ortu" aria-labelledby="profile-tab">
                          <div class="row">
                              <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nama_siswa" name="ortu[]" placeholder="Nama Lengkap" class="form-control" value="<?= $ayah['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" id="" name="lahir_ortu[]" class="form-control" value="<?= $ayah['tgl_lahir'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Agama</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="" name="agama_ortu[]" size="1">
                                    <option>--- Agama ---</option>
                                     <?php foreach ($agama->result() as $a): ?>
                                      <option value="<?= $a->ID ?>" <?php if($a->ID==$ayah['id_agama']){echo 'selected';}  ?> ><?= $a->nama ?></option>
                                     <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_ortu[]" class="form-control" value="<?= $ayah['contact']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pendidikan_ortu[]" class="form-control" value="<?= $ayah['pendidikan']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="kerja_ortu[]" class="form-control" value="<?= $ayah['pekerjaan']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Penghasilan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="penghasilan_ortu[]" class="form-control" value="<?= $ayah['penghasilan']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Kebutuhan Khusus</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="khusus_ortu[]" class="form-control" value="<?= $ayah['kebutuhan_khusus']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Keterangan Hidup</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="keterangan_ortu_1" value="1"  <?= $ayah['keterangan']=="1" ? "checked" : ""; ?> >Ya
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="keterangan_ortu_1" value="0" <?= $ayah['keterangan']=="0" ? "checked" : ""; ?> >Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nama_siswa" name="ortu[]" placeholder="Nama Lengkap" class="form-control" value="<?= $ibu['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" id="" name="lahir_ortu[]" class="form-control" value="<?= $ibu['tgl_lahir'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Agama</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="" name="agama_ortu[]" size="1">
                                        <option>--- Agama ---</option>
                                     <?php foreach ($agama->result() as $a): ?>
                                      <option value="<?= $a->ID ?>" <?php if($a->ID==$ibu['id_agama']){echo 'selected';}  ?> ><?= $a->nama ?></option>
                                     <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_ortu[]" class="form-control" value="<?= $ibu['contact'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pendidikan_ortu[]" class="form-control" value="<?= $ibu['pendidikan'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="kerja_ortu[]" class="form-control" value="<?= $ibu['pekerjaan'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Penghasilan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="penghasilan_ortu[]" class="form-control" value="<?= $ibu['penghasilan'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Kebutuhan Khusus</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="khusus_ortu[]" class="form-control" value="<?= $ibu['kebutuhan_khusus'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Keterangan Hidup</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="keterangan_ortu_2" value="1" <?= $ibu['keterangan']=="1" ? "checked" : ""; ?> >Ya
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="keterangan_ortu_2" value="0" <?= $ibu['keterangan']=="0" ? "checked" : ""; ?> >Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr> 
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Nama Wali</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nama_siswa" name="wali" placeholder="Nama Lengkap" class="form-control" value="<?= $wali['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" id="" name="lahir_wali" class="form-control" value="<?= $wali['tgl_lahir'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Agama</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="" name="agama_wali" size="1">
                                        <option>--- Agama ---</option>
                                     <?php foreach ($agama->result() as $a): ?>
                                      <option value="<?= $a->ID ?>" <?php if($a->ID==$wali['id_agama']){echo 'selected';}  ?> ><?= $a->nama ?></option>
                                     <?php endforeach ?>  
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_wali" class="form-control" value="<?= $wali['contact'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pendidikan_wali" class="form-control" value="<?= $wali['pendidikan'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="kerja_wali" class="form-control" value="<?= $wali['pekerjaan'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Penghasilan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="penghasilan_wali" class="form-control" value="<?= $wali['penghasilan'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Kebutuhan Khusus</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="khusus_wali" class="form-control" value="<?= $wali['kebutuhan_khusus'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">Keterangan Hidup</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="keterangan_ortu_3" value="1" <?= $wali['keterangan']=="1" ? "checked" : ""; ?> >Ya
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="keterangan_ortu_3" value="0" <?= $wali['keterangan']=="0" ? "checked" : ""; ?> >Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="alamat" aria-labelledby="profile-tab">
                          <div class="row">
                               
                              <p class="text-center">Alamat Siswa</p>
                            <hr>
                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-5">
                                    <input type="text" name="alamat" id="telp" placeholder="Jl..." class="form-control" value="<?= $alamat['alamat'] ?>" >
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" name="dusun" id="telp" placeholder="Dusun..." class="form-control" value="<?= $alamat['dusun'] ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label"></label>
                                <div class="col-sm-2">
                                    <input type="text" name="kelurahan" id="telp" placeholder="Kelurahan" class="form-control" value="<?= $alamat['kelurahan'] ?>" >
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="kecamatan" id="telp" placeholder="Kecamatan" class="form-control" value="<?= $alamat['kecamatan'] ?>" >
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control" id="" name="kabupaten" size="1">
                                        <option>Kabupaten/Kota</option>
                                        <?php foreach ($kab->result() as $k): ?>
                                        <option value="<?= $k->id_kab ?>" <?php  if ($k->id_kab==$alamat['kabupaten']){echo 'selected';} ?> ><?= $k->nama ?></option>
                                        <?php endforeach ?>        
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control" id="" name="provinsi" size="1">
                                        <option>Provinsi</option> 
                                         <?php foreach ($prov->result() as $p): ?>
                                        <option value="<?= $p->id_prov ?>" <?php  if ($p->id_prov==$alamat['provinsi']){echo 'selected';} ?> ><?= $p->nama ?></option>
                                        <?php endforeach ?>          
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="pos" id="telp" placeholder="Kode Pos" class="form-control" value="<?= $alamat['kode_pos'] ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">Jenis Tinggal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_tinggal" id="telp" placeholder="Tinggal Sendiri/Rumah Orang Tua/..." class="form-control" value="<?= $alamat['jenis_tinggal'] ?>">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="kps" aria-labelledby="profile-tab">
                          <div class="row">
                               <div class="form-group">
                                <label for="telp" class="col-sm-2 control-label">Penerima Kartu Indonesia Pintar</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="kps" value="1" <?= $siswa['kps']=="1" ? "checked" : ""; ?> >Ya
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="radio-inline">
                                                <input type="radio" id="" name="kps" value="0" <?= $siswa['kps']=="0" ? "checked" : ""; ?> >Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nomor Kip</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nkps" id="telp" placeholder="No. KIP" class="form-control" value="<?= $siswa['no_kps'] ?>">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="lampiran" aria-labelledby="profile-tab">
                          <div class="row">
                                <table id="datatable" class="table table-striped table-bordered bulk_action" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <td width="1%" ><b>No</b></td>
                                            <td width="90%"><b>Nama Dokument</b></td>
                                            <td width="10%"><b>#</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div>
                        </div>
                         
                      </div>
                    </div>

                  </div>
                </div>
              </div>


  </div>
</div>
</div>

</form>