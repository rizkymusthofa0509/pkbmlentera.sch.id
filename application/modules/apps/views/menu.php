<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="feather-home"></i> Dashboard
        </a>
    </li>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="feather-bar-chart-2"></i>Data Siswa <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-charts">
            <a href="<?= base_url() ?>apps/siswa" class="dropdown-item">Data siswa</a>
            <a href="<?= base_url() ?>apps/siswa/email" class="dropdown-item">Data E-mail Account</a>
            <a href="<?= base_url() ?>apps/siswa/bantuan" class="dropdown-item">Penerima Bantuan</a>
            <a href="<?= base_url() ?>apps/siswa/alamat" class="dropdown-item">Data Alamat Siswa</a>
            <a href="<?= base_url() ?>apps/siswa/account" class="dropdown-item">Data Account Siswa</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="feather-bar-chart-2"></i>Data Keuangan <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-charts">
            <a href="<?= base_url() ?>apps/finance" class="dropdown-item">Data Keuangan siswa</a>
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Cek Status Pembayaran siswa</a>
            <a href="<?= base_url() ?>apps/" class="dropdown-item">E-invoice</a> 
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="feather-bar-chart-2"></i>Laporan <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-charts">
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Laporan Keuangan bulanan</a>
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Laporan Keuangan Tahunan</a>
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Pendaftaran siswa baru</a> 
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="feather-bar-chart-2"></i>Data Master <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-charts">
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Gelombang Pendaftaran</a> 
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Program Paket Pendidikan</a> 
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="feather-bar-chart-2"></i>Manajemen Website <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-charts">
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Informasi Website</a> 
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Gallery Foto Kegiatan</a> 
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Gallery Video Kegiatan</a> 
            <a href="<?= base_url() ?>apps/" class="dropdown-item">Content Blogs</a> 
        </div>
    </li>


</ul>