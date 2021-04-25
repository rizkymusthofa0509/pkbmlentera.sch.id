    <div class="container-md">
      <div class="row p-1 mt-2">
        <div class="col-sm">
          <div class="" id="border" style="overflow: auto;">
              
              <h1>Formulir Registrasi Sekolah</h1>
              <hr>
              <h5>A. Data Siswa</h5>
              <hr>
            
            <?= form_open('registration/phase_one') ?>
              <div class="col-sm"> 
                <div class="form-group row pt-2">
                  <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                  </div>
                </div>
              </div>

              <div class="col-sm ">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10 ">
                    <div class="d-flex">
                      <div class="p-2">
                        <div class="custom-control custom-radio">
                        <input type="radio" id="pria" name="gender" class="custom-control-input" value="1">
                          <label class="custom-control-label" for="pria">Pria</label>
                        </div>
                      </div>
                      <div class="p-2">
                        <div class="custom-control custom-radio">
                        <input type="radio" id="wanita" name="gender" class="custom-control-input" value="2">
                          <label class="custom-control-label" for="wanita">Wanita</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
sad
              <input type="datetime" name="">
              
              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat, tanggal lahir</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="tempat_lahir" name="tmp_lahir">
                  </div>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" id="" name="tgl_lahir">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik" value="">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nisn" value="">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="custom-select" name="agama">
                      <option selected>Pilih agama</option>
                      <?php foreach ($agama->result() as $agm): ?>
                      <option value="<?= $agm->ID ?>"><?= $agm->nama ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="telp" class="col-sm-2 col-form-label">No. Telp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="telp" name="telp" value="">
                  </div>
                </div>
              </div>

              <div class="col-sm text-center">
                <button type="submit" class="btn btn-primary text-center">Next</button>
              </div>
            <?= form_close() ?>

          </div>
        </div>
      </div>
    </div>