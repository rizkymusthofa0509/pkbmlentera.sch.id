 <style type="text/css">
.dropdown-menu { 
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)!important; 
    margin-top:0px !important; 
    width:auto;
    white-space: nowrap;
    border-top: none;
    border-left: none;
    border-right: none;
    margin-top: -($spacer * .25 * 3);
} 
@media (min-width: 992px){
  .dropdown-menu .dropdown-toggle:after{
    border-top: .3em solid transparent;
      border-right: 0;
      border-bottom: .3em solid transparent;
      border-left: .3em solid;
  }
  .dropdown-menu .dropdown-menu{
    margin-left:0; margin-right: 0;
  }
  .dropdown-menu li{
    position: relative;
  }
  .nav-item .submenu{ 
    display: none;
    position: absolute;
    left:100%; top:-7px;
  }
  .nav-item .submenu-left{ 
    right:100%; left:auto;
  }
  .dropdown-menu > li:hover{ background-color: #f1f1f1 }
  .dropdown-menu > li:hover > .submenu{
    display: block;
  }
}
</style>
<ul class="nav navbar-nav ">
     <li><a href="<?= base_url() ?>panel/home"><font size="4"><i class="fa fa-home"></i></font></a></li>
     

     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  PPDB <span class="caret"></span></a>
       <ul class="dropdown-menu">
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Data Periode</a></li>         
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Verifikasi Peserta</a></li>         
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Grafik Peserta Didik</a></li>         
        </ul>
    </li>  
    <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Perserta Didik <span class="caret"></span></a>
       <ul class="dropdown-menu">
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Siswa</a></li>         
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Alamat Siswa</a></li>         
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Email Siswa</a></li>         
        </ul>
    </li>  
    <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Web Portal <span class="caret"></span></a>
       <ul class="dropdown-menu">
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Blog</a></li>         
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Foto Kegiatan</a></li>         
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Vidio Kegiatan</a></li>         
          <li><a href="<?= base_url() ?>apps/attendance"><i class="fa fa-angle-right"></i> Informasi Website</a></li>         
        </ul>
    </li>  

</ul>




          


<script type="text/javascript">
//  $(document).on('click', '.dropdown-menu', function (e) {
//   e.stopPropagation();
// }); 
// if ($(window).width() < 992) {
//   $('.dropdown-menu a').click(function(e){
//     e.preventDefault();
//       if($(this).next('.submenu').length){
//         $(this).next('.submenu').toggle();
//       }
//       $('.dropdown').on('hide.bs.dropdown', function () {
//      $(this).find('.submenu').hide();
//   })
//   });
// }
</script>