<div id="home" class="tab-pane active"><br>
	<h3 class="well">Data Diri Siswa</h3>
	<div class="form-group">
		<label for="firstName" class="col-sm-2 control-label text-left">Nama Lengkap</label>
		<div class="col-sm-10">
			<input type="text" id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap" class="form-control" required>
		</div>
    </div>
    <div class="form-group">
        <label class="text-left control-label text-left col-sm-2">Jenis Kelamin</label>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" id="" name="gender" value="P" checked>Pria
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" id="" name="gender" value="W">Wanita
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="tmp_lahir" class="col-sm-2 control-label text-left">Tempat, Tanggal Lahir</label>
        <div class="col-sm-5">
            <input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat lahir" class="form-control" required>
        </div>
        <div class="col-sm-5">
            <input type="date" id="" name="tgl_lahir" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="kewarnegaraan" class="col-sm-2 control-label text-left">Kewarnegaraan</label>
        <div class="col-sm-10">
            <input type="text" name="kewarnegaraan" id="kewarnegaraan" value="Indonesia" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="nik" class="col-sm-2 control-label text-left">NIK</label>
        <div class="col-sm-10">
            <input type="text" name="nik" id="nik" placeholder="" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="akta" class="col-sm-2 control-label text-left">No. Akta Kelahiran</label>
        <div class="col-sm-10">
            <input type="text" name="akta" id="akta" placeholder="" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="nis" class="col-sm-2 control-label text-left">NIS & NISN</label>
        <div class="col-sm-5">
            <input type="text" name="nis" id="nis" placeholder="NIS" class="form-control">
        </div>
        <div class="col-sm-5">
            <input type="text" name="nisn" id="lastName" placeholder="NISN" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="skhun" class="col-sm-2 control-label text-left">SKHUN</label>
        <div class="col-sm-10">
            <input type="text" name="skhun" id="skhun" placeholder="SKHUN" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2 control-label text-left">Agama</label>
        <div class="col-sm-10">
            <select class="form-control" id="" name="agama" size="1">
                <option>--- Agama ---</option>
                <?php foreach ($agama->result() as $agm): ?>
                  <option value="<?= $agm->ID ?>"><?= ucwords($agm->nama) ?></option>
                <?php endforeach ?>        
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="telp" class="col-sm-2 control-label text-left">Alamat</label>
        <div class="col-sm-5">
            <input type="text" name="alamat" id="telp" placeholder="Jl..." class="form-control">
        </div>
        <div class="col-sm-5">
            <input type="text" name="dusun" id="telp" placeholder="Dusun..." class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="telp" class="col-sm-2 control-label text-left"></label>
        <div class="col-sm-2">
            <input type="text" name="kelurahan" id="telp" placeholder="Kelurahan" class="form-control">
        </div>
        <div class="col-sm-2">
            <input type="text" name="kecamatan" id="telp" placeholder="Kecamatan" class="form-control">
        </div>
        <div class="col-sm-2">
            <select class="form-control" id="" name="kabupaten" size="1">
                <option>Kabupaten/Kota</option>
                <?php foreach ($kabupaten->result() as $kb): ?>
                  <option value="<?= $kb->id_kab ?>"><?= ucwords($kb->nama) ?></option>
                <?php endforeach ?>        
            </select>
        </div>
        <div class="col-sm-2">
            <select class="form-control" id="" name="provinsi" size="1">
                <option>Provinsi</option>
                <?php foreach ($provinsi->result() as $prov): ?>
                  <option value="<?= $prov->id_prov ?>" <?= $prov->id_prov == 32 ? 'selected' : '' ?>><?= ucwords($prov->nama) ?></option>
                <?php endforeach ?>        
            </select>
        </div>
        <div class="col-sm-2">
            <input type="text" name="pos" id="telp" placeholder="Kode Pos" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="telp" class="col-sm-2 control-label text-left">Jenis Tinggal</label>
        <div class="col-sm-10">
            <input type="text" name="jenis_tinggal" id="telp" placeholder="Tinggal Sendiri/Rumah Orang Tua/..." class="form-control">
        </div>
    </div>
</div>