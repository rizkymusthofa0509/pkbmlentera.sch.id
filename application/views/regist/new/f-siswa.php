          <div class="card card-default">
              <div class="card-header">
                  <h4 class="card-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#siswa">
                          <i class="glyphicon glyphicon-search text-gold"></i>
                          <b>Data Diri Siswa</b>
                      </a>
                  </h4>
              </div>
              <div id="siswa" class="collapse show">
                  <div class="card-body">
                    <!-- Nama ayah -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                            <label class="control-label">Paket Yang Diambil</label>
                            <select class="custom-select" name="paket">
                              <option value="1">Paket A (SD)</option>
                              <option value="2">Paket B (SMP)</option>
                              <option value="3">Paket C (SMA)</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <!-- nama dan gender -->
                      <div class="row">
                          <div class="col-md-9 col-lg-9">
                              <div class="form-group">
                                  <label class="control-label">Nama Lengkap</label>
                                  <input type="text" class="form-control" name="nama_siswa" />
                              </div>
                          </div>
                          <div class="col-md-3 col-lg-3">
                              <div class="form-group">
                                  <label class="control-label"></label>
                                    <div class="row">
                                      <div class="col-sm-3">
                                          <label class="radio-inline">
                                              <input type="radio" id="" name="gender" value="P">Pria
                                          </label>
                                      </div>
                                      <div class="col-sm-3">
                                          <label class="radio-inline">
                                              <input type="radio" id="" name="gender" value="W">Wanita
                                          </label>
                                      </div>
                                    </div>
                              </div>
                          </div>
                      </div>

                      <!-- tempat dan tangal lahir -->
                      <div class="row">
                          <div class="col-md-8 col-lg-8">
                              <div class="form-group">
                                  <label class="control-label">Tempat Lahir</label>
                                  <input type="text" class="form-control" name="tmp_lahir" />
                              </div>
                          </div>
                          <div class="col-md-4 col-lg-4">
                              <div class="form-group">
                                  <label class="control-label">Tanggal Lahir</label>
                                  <input type="date" class="form-control" name="tgl_lahir" />
                              </div>
                          </div>
                      </div>

                      <!-- kewarnegaraan dan agama -->
                      <div class="row">
                          <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                  <label class="control-label">Agama</label>
                                  <select class="custom-select" name="agama">
                                    <?php foreach ($agama->result() as $ag): ?>
                                      <option value="<?= $ag->ID ?>"><?= ucwords($ag->nama) ?></option>
                                    <?php endforeach ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                  <label class="control-label">Kewarnegaraan</label>
                                  <input type="text" class="form-control" name="kewarnegaraan" />
                              </div>
                          </div>
                      </div>

                      <!-- Nik dan nomor akta -->
                      <div class="row">
                        <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label class="control-label">No. Akta</label>
                              <input type="text" class="form-control" name="akta" />
                          </div>
                        </div><div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label class="control-label">NIK</label>
                              <input type="text" class="form-control" name="nik" />
                          </div>
                        </div>
                      </div>

                      <!-- NIS DAN NISN DAN SKHUN -->
                      <div class="row">
                        <div class="col-md-12 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">NIS</label>
                              <input type="text" class="form-control" name="nis" />
                          </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">NISN</label>
                              <input type="text" class="form-control" name="nisn" />
                          </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">No. SKHUN</label>
                              <input type="text" class="form-control" name="skhun" />
                          </div>
                        </div>
                      </div>

                      <!-- full alamat -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Alamat</label>
                              <input type="text" class="form-control mb-2" placeholder="Jl..." name="alamat" />
                              <input type="text" class="form-control mb-2" placeholder="Dusun" name="dusun" />
                              <input type="text" class="form-control mb-2" placeholder="Kelurahan" name="kelurahan" />
                              <input type="text" class="form-control mb-2" placeholder="Kecamatan" name="kecamatan" />
                              
                              <select name="kabupaten" class="custom-select mb-2">
                                <option>Kabupaten / Kota</option>
                                <?php foreach ($kabupaten->result() as $kab): ?>
                                  <option value="<?=$kab->id_kab ?>"><?= $kab->nama ?></option>
                                <?php endforeach ?>
                              </select>
                              <select name="provinsi" class="custom-select mb-2">
                                <option selected>Provinsi</option>
                                <?php foreach ($provinsi->result() as $prov): ?>
                                  <option value="<?= $prov->id_prov ?>"><?= $prov->nama ?></option>
                                <?php endforeach ?>
                              </select>
                              <input name="pos" type="text" class="form-control mb-2" placeholder="Kode Pos" />
                          </div>
                        </div>
                      </div>
                      
                      <!-- jenis tinggal -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Jenis tinggal</label>
                              <input type="text" class="form-control" placeholder="Tinggal Sendiri / Rumah orang Tua/..." name="jenis_tinggal" />
                          </div>
                        </div>
                      </div>

                      <!-- Radio kip dan nomor kip -->
                      <div class="row">
                        <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label class="control-label">Penerima KIP</label>
                              <div class="row">
                                <div class="col-sm-3">
                                    <label class="radio-inline">
                                        <input type="radio" id="" name="kps" value="1" checked>
                                        <label> Ya</label>
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <label class="radio-inline">
                                        <input type="radio" id="" name="kps" value="0">
                                        <label> Tidak</label>
                                    </label>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label class="control-label">No. KIP</label>
                              <input type="text" class="form-control" name="nkps" placeholder="" />
                          </div>
                        </div>
                      </div>

                      <!-- kebutuhan khusus -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Kebutuhan Khusus</label>
                              <input type="text" class="form-control" name="siswa_khusus" />
                          </div>
                        </div>
                      </div>

                      <!-- saudara -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Saudara</label>
                              <div class="input-group">
                                <span class="input-group-text">Anak Ke-</span>
                                <input type="text" name="anak_ke" id="telp" placeholder="1" class="form-control">
                                <span class="input-group-text" id="basic-addon1">Dari</span>
                                <input type="text" name="saudara" id="telp" placeholder="2" class="form-control">
                                <span class="input-group-text" id="basic-addon1">Bersaudara</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- tinggi dan berat -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Tinggi & Berat badan</label>
                              <div class="input-group">
                                <input type="text" name="tinggi" id="telp" placeholder="1" class="form-control">
                                <span class="input-group-text">CM</span>
                                <input type="text" name="berat" id="telp" placeholder="2" class="form-control">
                                <span class="input-group-text" id="basic-addon1">KG</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Contact -->
                      <div class="row">
                        <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label class="control-label">No. Telp</label>
                              <input type="text" class="form-control" name="telp" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label class="control-label">Email</label>
                              <input type="text" class="form-control" name="email" />
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>