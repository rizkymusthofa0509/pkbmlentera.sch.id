<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');

		// Login Validasi
		login();
	}

	public function index(){
		$data['title'] = 'PKBM Lentera';
		$data['pages'] = 'Administrator/home/home';
		$data['siswa'] = $this->M_siswa->all();


		$this->load->view('Administrator/template',$data);
	} 

	public function siswa($action='', $id=NULL)
	{
		switch ($action) {
			case 'edit':
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/siswa/edit';
				$data['siswa'] = $this->M_siswa->get_where($id)->row_array();
				$data['alamat']= $this->db->query("SELECT * FROM tbl_alamat WHERE id_siswa='$id' ")->row_array();
				$data['kontak']= $this->db->query("SELECT * FROM tbl_contact_siswa WHERE id_siswa='$id' ")->row_array();
				$data['ayah']  = $this->db->query("SELECT * FROM tbl_keluarga WHERE id_siswa='$id' and status='ayah' ")->row_array();
				$data['ibu']   = $this->db->query("SELECT * FROM tbl_keluarga WHERE id_siswa='$id' and status='ibu'  ")->row_array();
				$data['wali']  = $this->db->query("SELECT * FROM tbl_keluarga WHERE id_siswa='$id' and status='wali' ")->row_array();




			//Load Master	
				$data['agama'] = $this->db->query("SELECT * FROM mst_agama");
				$data['kab']   = $this->db->query("SELECT * FROM mst_kabupaten");
				$data['prov']  = $this->db->query("SELECT * FROM mst_provinsi");
				$data['agama'] = $this->db->query("SELECT * FROM mst_agama");
				$this->load->view('Administrator/template',$data);
			break;
			
			case 'update':
				echo $this->input->post('jajal');
			break;

			case 'hapus':
				# code...
			break;

			case 'kps':
				$data['title'] = 'PKBM Lentera | Kartu Perlindungan Sosial';
				$data['pages'] = 'Administrator/siswa/kps';
				$data['siswa'] = $this->M_siswa->all();
				$this->load->view('Administrator/template',$data);
			break;

			
			default:
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/siswa/siswa';
				$data['siswa'] = $this->M_siswa->all();
				$this->load->view('Administrator/template',$data);
			break;
		}
	}
 

 	public function varifikasi($action='',$id='')
 	{
 		$data['title'] = 'PKBM Lentera';
		$data['pages'] = 'Administrator/verifikasi/home'; 
		$data['checked'] = '';
		$data['nomor']    = '';
		$data['hidden']  = ' hidden ';
		if ($this->input->post('nomor')){
			$nomor = $this->input->post('nomor');
			$open  = $this->db->query("SELECT * FROM tbl_siswa WHERE regist_key='$nomor' ");
			if ($open->num_rows() > 0){
				$data['nomor']    = $this->input->post('nomor');
				$data['hidden']  = ' ';
				$res = $open->row_array();
				switch ($res['status_regist']) {
					case '1': 
						$data['checked'] = ' checked '; 
						$this->session->set_flashdata('message', '
														<div class="alert alert-success" role="alert">
														   <i class="fa fa-check"></i>	Already verified
														</div>
													'); 
					break;
					case '0': 
						$this->session->set_flashdata('message', '
														<div class="alert alert-warning" role="alert">
														   <i class="fa fa-remove"></i>	Not verified
														</div>
													');  
					break;
				}
			}else{
				$this->session->set_flashdata('message', '
														<div class="alert alert-danger" role="alert">
														   <i class="fa fa-remove"></i>	Tidak Terdaftar
														</div>
													');
			}
		}

		$this->load->view('Administrator/template',$data);
 	}

 	public function varifikasi_update()
 	{
 		$regist_key = $this->input->post('regist_key');
 		$status_regist = $this->input->post('status_regist');
 		$update     = $this->db->query("UPDATE tbl_siswa SET status_regist='$status_regist' WHERE regist_key='$regist_key' ");
 		echo "as";
 	}

	public function agama($action='', $id='')
	{
		switch ($action) {
			case 'edit':
				 
			break;
			
			case 'update':
				 
			break;

			case 'hapus':
				# code...
			break;

			
			default:
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/agama/list';
				$data['siswa'] = $this->M_siswa->all();
				$this->load->view('Administrator/template',$data);
			break;
		}
	}


	public function bank($action='',$id='')
	{
		switch ($action) {
			case 'add':
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/bank/add';
				$data['siswa'] = $this->M_siswa->all();
				$this->load->view('Administrator/template',$data);
			break; 

			case 'save':
				$insert['id_siswa']		= $this->input->post('id_siswa');
				$insert['nomor_trx']	= 'TRX-'.time();
				$insert['tanggal']		= date_now();
				$insert['keterangan']	= $this->input->post('keterangan');
				$insert['nominal']		= $this->input->post('nominal');
				$insert['pengirim_bank']= $this->input->post('pengirim_bank');
				$insert['pengirim_name']= $this->input->post('pengirim_name');
				$insert['pengirim_rek']	= $this->input->post('pengirim_rek');
				$insert['penerima_bank']= $this->input->post('penerima_bank');
				$insert['penerima_name']= $this->input->post('penerima_name');
				$insert['penerima_rek']	= $this->input->post('penerima_rek');
				$insert['lampiran']		= $this->input->post('lampiran');
				$insert['status']		= 1; //DONE
				$insert['create_at']	= dateTime_now();
				$db                     = $this->db->insert('tbl_bank',$insert);
				if ($db){
					$this->session->set_flashdata('message', '
													<div class="alert alert-success" role="alert">
														Transaksi Berhasil disimpan!
													</div>
												'); 
					redirect('administrator/bank');
				}
			break;

			case 'delete':
				$del = $this->db->query("DELETE FROM tbl_bank WHERE id='$id' ");
				if ($del){
					$this->session->set_flashdata('message', '
													<div class="alert alert-danger" role="alert">
														Transaksi Berhasil dihapus!
													</div>
												'); 
					redirect('administrator/bank');
				}
			break;

			
			default:
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/bank/home'; 
				$where = '';
				if ($this->input->post('nomor_register')){
					$post = $this->input->post('nomor_register');
					$where = " WHERE s.regist_key LIKE '%".$post."%' ";
				}
				$data['bank']  = $this->db->query("SELECT 
														s.nama,
														s.regist_key,
														b.* 
														FROM tbl_bank AS b
														LEFT JOIN tbl_siswa AS s ON s.ID=b.id_siswa
														$where
														");


				$this->load->view('Administrator/template',$data);
			break;
		}
	}


	public function laporan($action='',$id='')
	{
		switch ($action) {
			case 'edit':
				 
			break;
			
			case 'update':
				 
			break;

			case 'hapus':
				# code...
			break;

			
			default:
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/laporan/home';

				$where = '';
				if ($this->input->post('dari')){
					$dari = $this->input->post('dari');
					$sampai = $this->input->post('sampai');
					$where = " WHERE DATE(tanggal)>='".$dari."' and DATE(tanggal)<='".$sampai."' ";
				}
				$data['transaksi']  = $this->db->query("SELECT * FROM tbl_bank 
														$where
														
														");

				$data['transaksi_tot']  = $this->db->query("SELECT * FROM tbl_bank");
				
				$this->load->view('Administrator/template',$data);
			break;
		}
	}

	public function users($action='',$id='')
 	{
 		  switch ($action) {
			case 'add':
				$data['title'] = 'PKBM Lentera | User Baru';
				$data['pages'] = 'Administrator/user/add'; 
				$data['users'] = $this->db->query("SELECT * FROM tbl_account");
				$this->load->view('Administrator/template',$data);
			break;
			
			case 'save':
				 $i['email'] 	= $this->input->post('email');
				 $i['username'] = $this->input->post('username');
				 $i['password'] = $this->input->post('password');
				 $i['nama']  	= $this->input->post('nama');
				 $i['level'] 	= $this->input->post('level');
				 $i['nomor_hp'] = $this->input->post('nomor_hp');
				 $i['join_date'] = dateTime_now();

				 	$insert = $this->db->insert('tbl_account',$i);
				 	if ($insert){
				 	$this->session->set_flashdata('message', '
													<div class="alert alert-success" role="alert">
														Account Berhasil ditambahkan.
													</div>
												'); 
					redirect('administrator/users');
				 	}
			break;

			case 'delete':
				$del = $this->db->query("DELETE FROM tbl_account WHERE id='$id' ");
				if ($del){
					$this->session->set_flashdata('message', '
													<div class="alert alert-success" role="alert">
														Account Berhasil dihapus.
													</div>
												'); 
					redirect('administrator/users');
				}
			break;
			case 'edit':
				$data['title'] = 'PKBM Lentera | User Baru';
				$data['pages'] = 'Administrator/user/edit'; 
				$data['detail'] = $this->db->query("SELECT * FROM tbl_account WHERE id='$id' ")->row_array();
				$this->load->view('Administrator/template',$data);
			break;

			case 'update':
				 $u['email'] 	= $this->input->post('email');
				 $u['username'] = $this->input->post('username');
				 $u['password'] = $this->input->post('password');
				 $u['nama']  	= $this->input->post('nama');
				 $u['level'] 	= $this->input->post('level');
				 $u['nomor_hp'] = $this->input->post('nomor_hp');
				 	$update = $this->db->where('id',$this->input->post('id'));
				 	$update = $this->db->update('tbl_account',$u);
				 	if ($update){
				 	$this->session->set_flashdata('message', '
													<div class="alert alert-success" role="alert">
														Account Berhasil diperbarui.
													</div>
												'); 
					redirect('administrator/users');
				 	}
			break;
			
			default:
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/user/list'; 
				$data['users'] = $this->db->query("SELECT * FROM tbl_account");
				$this->load->view('Administrator/template',$data);
			break;
		}
 	}

 	public function email($action='',$id='')
 	{
 		switch ($action) {
			case 'list':
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/siswa/email'; 
				$data['siswa'] = $this->M_siswa->all();  
				$this->load->view('Administrator/template',$data);
			break; 
			default:
				return('/administrator');
			break;
		}
 	}

 	public function paket($action='',$id='')
 	{
 		  switch ($action) {
			case 'list':
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/siswa/paket';  
				$data['paket'] = $id; 
				$data['siswa'] = $this->M_siswa->all();
				$this->load->view('Administrator/template',$data);
			break;
			
			case 'add':
				$data['title'] = 'PKBM Lentera';
				$data['pages'] = 'Administrator/siswa/add_paket'; 
				$data['siswa'] = $this->M_siswa->all();
				$data['paket'] = $id;
				$data['paketAll'] = $this->db->query("SELECT * FROM mst_paket");
				$this->load->view('Administrator/template',$data);
			break;

			case 'add_save':
				$i['user_id']	= $this->input->post('user_id');
				$i['id_paket']	= $this->input->post('id_paket');
				$i['create_at']	= dateTime_now();
				$this->db->insert('tbl_paket',$i);
					$idnya = $this->input->post('id_paket');
					$o =  $this->db->query("SELECT * FROM mst_paket WHERE ID='$idnya' ")->row_array();
					redirect('administrator/paket/list/'.$o['kode']);
			break;
			case 'riwayat':
				$data['title']  = 'PKBM Lentera';
				$data['pages']  = 'Administrator/siswa/riwayat_pendidikan';   
				$data['riwayat']= $this->db->query("SELECT * FROM tbl_paket as p LEFT JOIN mst_paket as m on m.ID=p.id_paket WHERE p.user_id='$id' ORDER BY DATE(p.create_at) DESC");
				$this->load->view('Administrator/template',$data);
			break;
			default:
				return('/administrator');
			break;
		}
 	}

}