<div class="container-md">
  <div class="row p-1 mt-2">
      <div class="col-sm">
        <div class="" id="border" style="overflow: auto;">
          <h5>Data Calon Siswa</h5>
          <hr>
          

        <?= form_open('registration/phase_two') ?>
          <div class="col-sm">
            <div class="form-group row pt-2">
              <label for="kewarnegaraan" class="col-sm-2 col-form-label">Kewarnegaraan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="kewarnegaraan" name="kewarnegaraan" value="">
              </div>
            </div>
          </div>

          <div class="col-sm">
            <div class="form-group row pt-2">
              <label for="tempat_lahir" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-5">
                <select class="custom-select" name="provinsi">
                  <option selected>Pilih Provinsi</option>
                  <?php foreach ($provinsi->result() as $prov): ?>
                  <option value="<?= $prov->id_prov ?>"><?= $prov->nama ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="col-sm-5">
                <select class="custom-select" name="kabupaten">
                  <option selected>Pilih kabupaten</option>
                  <?php foreach ($kabupaten->result() as $kab): ?>
                  <option value="<?= $kab->id_kab ?>"><?= $kab->nama ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-sm">
            <div class="form-group row pt-2">
              <label for="" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-3">
                <input type="text" name="kelurahan" class="form-control" placeholder="kelurahan">
              </div>
              <div class="col-sm-7">
                <input type="text" name="alamat" class="form-control" placeholder="alamat lengkap">
              </div>
            </div>
          </div>



          <!--
          <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="">
                  </div>
                </div>
          </div>

          <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Sekolah Terakhir</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="staticEmail" value="">
                  </div>
                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="staticEmail" value="">
                  </div>
                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="staticEmail" value="">
                  </div>
                </div>
          </div> 
          -->


              <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="" class="col-sm-2 col-form-label">Anak Ke</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="" value="" name="anak_ke">
                  </div>
                  <label for="" class="col-sm-1 col-form-label">Dari </label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="" value="" name="jml_saudara">
                  </div>
                  <label for="" class="col-sm-1 col-form-label">Saudara</label>
                </div>
              </div>

          <!--
          <div class="col-sm">
                <div class="form-group row pt-2">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Sekolah Terakhir</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="staticEmail" value="">
                  </div>
                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="staticEmail" value="">
                  </div>
                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="staticEmail" value="">
                  </div>
                </div>
          </div> 
          -->
             
          <!--     
          <div class="col-sm ">
                <div class="form-group row pt-2">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Surat</label>
                  <div class="col-sm-10 ">
                    <div class="d-flex">
                      <div class="p-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            KKS
                          </label>
                        </div>
                      </div>
                      <div class="p-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            KPS
                          </label>
                        </div>
                      </div>
                      <div class="p-2">
                       <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            KIP
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div> 
          -->

            <div class="col-sm">
              <div class="form-group row pt-2">
                <label for="" class="col-sm-2 col-form-label">Tinggi Badan & Berat Badan</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="tinggi badan" name="tinggi_badan">
                </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control" placeholder="berat badan" name="berat_badan">
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