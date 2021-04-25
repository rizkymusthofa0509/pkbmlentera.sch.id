<div id="parent" class="tab-pane fade"><br>
	<h3 class="well">Data Diri Siswa</h3>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Nama Ayah</label>
        <div class="col-sm-10">
            <input type="text" id="nama_siswa" name="ortu[]" placeholder="Nama Lengkap" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" id="" name="lahir_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2 control-label text-left">Agama</label>
        <div class="col-sm-10">
            <select class="form-control" id="" name="agama_ortu[]" size="1">
                <option>--- Agama ---</option>
                <?php foreach ($agama->result() as $agm): ?>
                  <option value="<?= $agm->ID ?>"><?= ucwords($agm->nama) ?></option>
                <?php endforeach ?>        
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-left">Contact</label>
        <div class="col-sm-10">
            <input type="text" name="contact_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-left">Pendidikan Terakhir</label>
        <div class="col-sm-10">
            <input type="text" name="pendidikan_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" id="" name="kerja_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Penghasilan</label>
        <div class="col-sm-10">
            <input type="text" id="" name="penghasilan_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Kebutuhan Khusus</label>
        <div class="col-sm-10">
            <input type="text" id="" name="khusus_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Keterangan Hidup</label>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" id="" name="keterangan_ortu_1" value="1" checked>Ya
                    </label>
                </div>
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" id="" name="keterangan_ortu_1" value="0">Tidak
                    </label>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Nama Ibu</label>
        <div class="col-sm-10">
            <input type="text" id="nama_siswa" name="ortu[]" placeholder="Nama Lengkap" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" id="" name="lahir_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2 control-label text-left">Agama</label>
        <div class="col-sm-10">
            <select class="form-control" id="" name="agama_ortu[]" size="1">
                <option>--- Agama ---</option>
                <?php foreach ($agama->result() as $agm): ?>
                  <option value="<?= $agm->ID ?>"><?= ucwords($agm->nama) ?></option>
                <?php endforeach ?>        
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-left">Contact</label>
        <div class="col-sm-10">
            <input type="text" name="contact_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-left">Pendidikan Terakhir</label>
        <div class="col-sm-10">
            <input type="text" name="pendidikan_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" id="" name="kerja_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Penghasilan</label>
        <div class="col-sm-10">
            <input type="text" id="" name="penghasilan_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Kebutuhan Khusus</label>
        <div class="col-sm-10">
            <input type="text" id="" name="khusus_ortu[]" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Keterangan Hidup</label>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" id="" name="keterangan_ortu_2" value="1" checked>Ya
                    </label>
                </div>
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" id="" name="keterangan_ortu_2" value="0">Tidak
                    </label>
                </div>
            </div>
        </div>
    </div>
    <hr> 
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Nama Wali</label>
        <div class="col-sm-10">
            <input type="text" id="nama_siswa" name="wali" placeholder="Nama Lengkap" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" id="" name="lahir_wali" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2 control-label text-left">Agama</label>
        <div class="col-sm-10">
            <select class="form-control" id="" name="agama_wali" size="1">
                <option>--- Agama ---</option>
                <?php foreach ($agama->result() as $agm): ?>
                  <option value="<?= $agm->ID ?>"><?= ucwords($agm->nama) ?></option>
                <?php endforeach ?>        
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-left">Contact</label>
        <div class="col-sm-10">
            <input type="text" name="contact_wali" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-left">Pendidikan Terakhir</label>
        <div class="col-sm-10">
            <input type="text" name="pendidikan_wali" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" id="" name="kerja_wali" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Penghasilan</label>
        <div class="col-sm-10">
            <input type="text" id="" name="penghasilan_wali" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Kebutuhan Khusus</label>
        <div class="col-sm-10">
            <input type="text" id="" name="khusus_wali" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label text-left">Keterangan Hidup</label>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" id="" name="keterangan_ortu_3" value="1" checked="">Ya
                    </label>
                </div>
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" id="" name="keterangan_ortu_3" value="0">Tidak
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>