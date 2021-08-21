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
                      <!-- Field gelombang dan paket -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                            <label class="control-label">Paket Yang Diambil</label>
                            <select class="custom-select" name="paket_id">
                              <?php foreach ($paket as $pkt): ?>
                                <option value="<?= $pkt->id ?>"><?= $pkt->name ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                            <label class="control-label">Gelombang</label>
                            <select class="custom-select" name="gelombang_id">
                              <?php foreach ($gelombang as $p): ?>
                                <option value="<?= $p->id ?>">
                                  <?= ucwords($p->name).' ( '.date('d-m-Y', strtotime($p->date_start)).' - '.date('d-m-Y', strtotime($p->date_end)).' )' ?>
                                </option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <!-- Field nama dan gender -->
                      <div class="row">
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                            <label class="control-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" required/>
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                            <label class="control-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" required/>
                          </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                          <div class="form-group">
                            <label class="control-label"></label>
                            <div class="row">
                              <div class="col-sm-3">
                                <label class="radio-inline">
                                  <input type="radio" id="" name="gender" value="L">Pria
                                </label>
                              </div>
                              <div class="col-sm-3">
                                <label class="radio-inline">
                                  <input type="radio" id="" name="gender" value="P">Wanita
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Field username dan password -->
                      <div class="row">
                        <div class="col-md-9 col-lg-9">
                          <div class="form-group">
                            <label class="control-label">Username</label>
                            <input type="text" class="form-control" name="username" required/>
                          </div>
                        </div>
                        <div class="col-md-9 col-lg-9">
                          <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" name="password" required/>
                          </div>
                        </div>
                      </div>

                      <!-- Field tempat dan tangal lahir -->
                      <div class="row">
                        <div class="col-md-8 col-lg-8">
                          <div class="form-group">
                            <label class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tmp_lahir" required />
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" required />
                          </div>
                        </div>
                      </div>

                      <!-- Field kewarnegaraan dan agama -->
                      <div class="row">
                        <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                            <label class="control-label">Agama</label>
                            <select class="custom-select" name="agama">
                                <option value="islam">Islam</option>
                                <option value="konghucu">Katholik</option>
                                <option value="katholik">Protestan</option>
                                <option value="protestan">Hindu</option>
                                <option value="hindu">Buddha</option>
                                <option value="buddha">Konghucu</option>
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

                      <!-- Field NIK dan nomor akta -->
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

                      <!-- Field NIS DAN NISN DAN SKHUN -->
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

                      <!-- Field Alamat -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                            <label class="control-label">Alamat</label>
                            <textarea class="form-control mb-2" name="address"></textarea>
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
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">No. KIP</label>
                              <input type="text" class="form-control" name="nkps" placeholder="" />
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
                              <input type="text" class="form-control" name="telp" required />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label class="control-label">Email</label>
                              <input type="text" class="form-control" name="email" required />
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>