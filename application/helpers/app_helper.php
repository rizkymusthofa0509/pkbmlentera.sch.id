<?php

	
function label($id='')
	{
		switch ($id) {
			case '1':
				echo '<label class="label label-success">Aktif</label>';
			break;
			case '0':
				echo '<label class="label label-danger">Tidak Aktif</label>';
			break;
			
			default:
				echo '<label class="label label-warning">Not Found!</label>';
			break;
		}
	}
	
	function login()
	{
		$ci =& get_instance();
		$login = $ci->session->userdata('id');
        if  (empty($login)){
            redirect('/panel/auth');
        }
       
	}

	function avatar()
	{
			$ci    =& get_instance();
			$login = $ci->session->userdata('email');
	        $foto  = 'user.png';
	        return $foto;
	}
	 

	function call_month($bln='')
	{
		 $bulan = array(
                      '01'=>'Januari',
                      '02'=>'Februari',
                      '03'=>'Maret',
                      '04'=>'April',
                      '05'=>'Mei',
                      '06'=>'Juni',
                      '07'=>'Juli',
                      '08'=>'Agustus',
                      '09'=>'September',
                      '10'=>'Oktober',
                      '11'=>'November',
                      '12'=>'Desember',
                    ); 
		 return $bulan[$bln];
	}

  
	 
	function date_idn($get='')
	{	
		$pisah  =  explode("-",$get);
		$tgl 	= $pisah[2];
		$bln 	= $pisah[1];
		$thn 	= $pisah[0];

		return $tgl.' '.call_month($bln).' '.$thn;
	}

	function rupiah($get='')
	{
		return number_format($get);
	}

	function tanggal($tanggal='')
	{
		$tgl = substr($tanggal,8,2);
		$bln = substr($tanggal,5,2);
		$thn = substr($tanggal,0,4);
		return $tgl.' '.call_month($bln).' '.$thn;
	}

	function date_now()
	{
		date_default_timezone_set("Asia/Jakarta");
		return DATE("Y-m-d");
	}

	function dateTime_now()
	{
		date_default_timezone_set("Asia/Jakarta");
		return DATE("Y-m-d H:i:s");
	}

	function paket_sekarang($user_id='')
	{
		$ci      =& get_instance(); 
		$paket   =  $ci->db->query("SELECT 
									m.nama,
									m.kode,
									p.* 
									FROM tbl_paket AS p
									LEFT JOIN mst_paket AS m ON m.ID=p.id_paket
									WHERE p.user_id='$user_id' ORDER BY p.id DESC LIMIT 1 ")->row_array();
		return $paket['kode'];
	}

	function email($id='')
	{
		$ci      =& get_instance(); 
		$paket   =  $ci->db->query("SELECT * FROM tbl_contact_siswa WHERE id_siswa='$id' ")->row_array();
		return $paket['email'];
	}
 

?>
