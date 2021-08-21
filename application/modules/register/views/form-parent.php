          <div class="card card-default">
              <div class="card-header">
                  <h4 class="card-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#parents">
                          <i class="glyphicon glyphicon-lock text-gold"></i>
                          <b>Data Orang Tua</b>
                      </a>
                  </h4>
              </div>
              <div id="parents" class="collapse">
                  <div class="card-body">
                    <div class="parent">
                      <!-- Nama ayah -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Nama Ayah</label>
                              <input type="text" name="ortu[]" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <!-- tanggal lahir dan agama -->
                      <div class="row">
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Tanggal Lahir</label>
                              <input type="date" class="form-control" name="ortu_dob[]" />
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Tempat Lahir</label>
                              <input type="input" class="form-control" name="ortu_pob[]" />
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                            <label class="control-label">Agama</label>
                            <select class="custom-select" name="agama_ortu[]">
                                <option value="islam">Islam</option>
                                <option value="konghucu">Katholik</option>
                                <option value="katholik">Protestan</option>
                                <option value="protestan">Hindu</option>
                                <option value="hindu">Buddha</option>
                                <option value="buddha">Konghucu</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <!-- contact -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Contact</label>
                              <input type="text" class="form-control" name="contact_ortu[]"/>
                          </div>
                        </div>
                      </div>

                      <!-- pendidikan terakhir, pekerjaan, penghasilan -->
                      <div class="row">
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Pendidikan Terakhir</label>
                              <input type="text" class="form-control" name="pendidikan_ortu[]"/>
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Pekerjaan</label>
                              <input type="text" class="form-control" name="kerja_ortu[]" />
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Penghasilan</label>
                              <div class="input-group">
                                <span class="input-group-text">Rp. </span>
                                <input type="text" class="form-control" name="penghasilan_ortu[]" />
                              </div>
                          </div>
                        </div>
                      </div>

                      <!-- kebutuhan khusus -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Kebutuhan Khusus</label>
                              <input type="text" class="form-control" name="khusus_ortu[]"/>
                          </div>
                        </div>
                      </div>

                      <!-- ketertangan hidup -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                            <label class="control-label">Keterangan hidup</label>
                            <div class="row">
                              <div class="col-sm-3">
                                  <label class="radio-inline">
                                      <input type="radio" id="" name="keterangan_ortu_1" value="1" checked>
                                      <label>Ya</label>
                                  </label>
                              </div>
                              <div class="col-sm-3">
                                  <label class="radio-inline">
                                      <input type="radio" id="" name="keterangan_ortu_1" value="0">
                                      <label>Tidak</label>
                                  </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><hr>
                    <div class="parent">
                      <!-- Nama Ibu -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Nama Ibu</label>
                              <input type="text" class="form-control" name="ortu[]" />
                          </div>
                        </div>
                      </div>

                      <!-- tanggal lahir dan agama -->
                      <div class="row">
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Tanggal Lahir</label>
                              <input type="date" class="form-control" name="ortu_dob[]"/>
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Tempat Lahir</label>
                              <input type="inputt" class="form-control" name="ortu_pob[]"/>
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                            <label class="control-label">Agama</label>
                              <select class="custom-select" name="agama_ortu[]">
                                <option value="islam">Islam</option>
                                <option value="konghucu">Katholik</option>
                                <option value="katholik">Protestan</option>
                                <option value="protestan">Hindu</option>
                                <option value="hindu">Buddha</option>
                                <option value="buddha">Konghucu</option>
                              </select>
                          </div>
                        </div>
                      </div>

                      <!-- contact -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Contact</label>
                              <input type="text" class="form-control" name="contact_ortu[]"/>
                          </div>
                        </div>
                      </div>

                      <!-- pendidikan terakhir, pekerjaan, penghasilan -->
                      <div class="row">
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Pendidikan Terakhir</label>
                              <input type="text" class="form-control" name="pendidikan_ortu[]"/>
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Pekerjaan</label>
                              <input type="text" class="form-control" name="kerja_ortu[]" />
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">Penghasilan</label>
                              <div class="input-group">
                                <span class="input-group-text">Rp. </span>
                                <input type="text" class="form-control" name="penghasilan_ortu[]"/>
                              </div>
                          </div>
                        </div>
                      </div>

                      <!-- kebutuhan khusus -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                              <label class="control-label">Kebutuhan Khusus</label>
                              <input type="text" class="form-control" name="khusus_ortu[]"/>
                          </div>
                        </div>
                      </div>

                      <!-- ketertangan hidup -->
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                            <label class="control-label">Keterangan hidup</label>
                            <div class="row">
                              <div class="col-sm-3">
                                  <label class="radio-inline">
                                      <input type="radio" id="" name="keterangan_ortu_2" value="1" checked>
                                      <label>Ya</label>
                                  </label>
                              </div>
                              <div class="col-sm-3">
                                  <label class="radio-inline">
                                      <input type="radio" id="" name="keterangan_ortu_2" value="0">
                                      <label>Tidak</label>
                                  </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>