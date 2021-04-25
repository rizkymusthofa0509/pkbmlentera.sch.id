<div class="container-md">
  <div class="row p-1 mt-2">
      <div class="col-sm">
        <div class="" id="border" style="overflow: auto;">
          <h5>Data orang tua Siswa</h5>
          <hr>

          <?= form_open('registration/phase_three') ?>
              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="Nama Bapak" name="name_1">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="Nama Ibu" name="name_2">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="NIK Bapak" name="nik_1">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="NIK Ibu" name="nik_2">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" id="" value="" name="tgl_1">
                  </div>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" id="" value="" name="tgl_2">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-5">
                   <select class="custom-select" name="agama_1">
                      <option selected>Pilih agama</option>
                      <?php foreach ($agama->result() as $agm): ?>
                      <option value="<?= $agm->ID ?>"><?= $agm->nama ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <select class="custom-select" name="agama_2">
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
                  <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="Pendidikan Bapak" name="pendidikan_1">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="Pendidikan Ibu" name="pendidikan_2">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="pekerjaan Bapak" name="pekerjaan_1">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="pekerjaan ibu" name="pekerjaan_2">
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">Penghasilan</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="penghasilan Bapak" name="penghasilan_1">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" value="" placeholder="penghasilan Ibu" name="penghasilan_2">
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