<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('m_regist');
	}

	public function old_index(){
		$data['title'] = 'Registration Form';
		$data['agama'] = $this->db->get('mst_agama');
		$data['kabupaten'] = $this->m_regist->get_kab(32);
		$data['provinsi'] = $this->m_regist->get_prov();

		$this->load->view("regist/header", $data);
		$this->load->view("regist/sample");
		$this->load->view("regist/footer");
	}

	public function index(){
		$this->load->helper('form');
		$this->load->model('m_regist');

		$data['title'] = 'Form Registration';
		$data['agama'] = $this->db->get('mst_agama');
		$data['notes'] = $this->db->get('tbl_notes')->row();
		$data['kabupaten'] = $this->m_regist->get_kab(32);
		$data['provinsi'] = $this->m_regist->get_prov();
		$this->load->view('regist/new/header', $data);
		$this->load->view('regist/new/index', $data);
		$this->load->view('regist/new/footer');
	}

	public function prosesRegist(){
		$id_siswa = $this->regOne();
		$this->regTwo($id_siswa);
		$this->regThree($id_siswa);

		echo "Success";
	}

	public function testRegist(){
		$id_siswa = $this->regOne();
		$this->regTwo($id_siswa);
		$this->regThree($id_siswa);


		mkdir('uploads/siswa/'.$id_siswa, 0777, true);

		$this->upload_file($id_siswa, 'file_kk', 'kartu keluarga');
		$this->upload_file($id_siswa, 'file_akta', 'akta kelahiran');
		$this->upload_file($id_siswa, 'file_foto', 'pas foto');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran berhasil!</div>');
		redirect('welcome/new_form');
	}

	//Insert data awal siswa
	//return ID siswa
	private function regOne(){		
		
		$data_user = [
			'nama' 				=> $this->input->post('nama_siswa'),
			'regist_key' 		=> $this->numRegist(),
			'gender'  			=> $this->input->post('gender'),
			'tmp_lahir'			=> $this->input->post('tmp_lahir'),
			'tgl_lahir'			=> $this->input->post('tgl_lahir'),
			'kewarnegaraan' 	=> $this->input->post('kewarnegaraan'),
			'nik' 				=> $this->input->post('nik'),
			'nis' 				=> $this->input->post('nis'),
			'nisn' 				=> $this->input->post('nisn'),
			'skhun' 			=> $this->input->post('skhun'),
			'akta' 				=> $this->input->post('akta'),
			'tinggi_badan' 		=> $this->input->post('tinggi'),
			'berat_badan' 		=> $this->input->post('berat'),
			'id_agama' 			=> $this->input->post('agama'),
			'anak_ke' 			=> $this->input->post('anak_ke'),
			'jml_saudara' 		=> intval($this->input->post('saudara'))-1,
			'kps' 				=> $this->input->post('kps'),
			'no_kps' 			=> $this->input->post('nkps'),
			'kebutuhan_khusus' 	=> $this->input->post('siswa_khusus'),
			'timestamp' 		=> time(),
			'id_paket'			=> $this->input->post('paket')
			//'transportasi' 	=> $this->input->post('transportasi'),
		];
		$this->db->insert('tbl_siswa', $data_user);
		return $this->db->insert_id();
	}

	//Insert data pribadi siswa
	private function regTwo($id_siswa){
		
		$data_alamat = [
			'id_siswa' 		=> $id_siswa,
			'alamat' 		=> $this->input->post('alamat'),
			'dusun' 		=> $this->input->post('dusun'),
			'kelurahan' 	=> $this->input->post('kelurahan'),
			'kecamatan' 	=> $this->input->post('kecamatan'),
			'kabupaten' 	=> $this->input->post('kabupaten'),
			'provinsi' 		=> $this->input->post('provinsi'),
			'kode_pos' 		=> $this->input->post('pos'),
			'jenis_tinggal' => $this->input->post('jenis_tinggal')
		];

		$this->db->insert('tbl_alamat', $data_alamat);

		$data_contact = [
			'id_siswa' 	=> $id_siswa,
			'telp' 		=> $this->input->post('telp'), 
			'email' 	=> $this->input->post('email'), 
		];

		$this->db->insert('tbl_contact_siswa', $data_contact);
	}

	//Insert data orangtua dan wali
	private function regThree($id_siswa){
		$ortu  				= $this->input->post("ortu");
		$lahir_ortu 		= $this->input->post("lahir_ortu");
		$kerja_ortu 		= $this->input->post("kerja_ortu");
		$penghasilan_ortu 	= $this->input->post("penghasilan_ortu");
		$khusus_ortu 		= $this->input->post("khusus_ortu");
		$agama_ortu 		= $this->input->post("agama_ortu");
		$contact_ortu 		= $this->input->post("contact_ortu");
		$pendidikan_ortu 	= $this->input->post("pendidikan_ortu");
		$keterangan_ortu_1 	= $this->input->post("keterangan_ortu_1");
		$keterangan_ortu_2 	= $this->input->post("keterangan_ortu_2");
		$keterangan_ortu_3 	= $this->input->post("keterangan_ortu_3");
		$status 			= ['ayah', 'ibu'];
		$keterangan 		= [$keterangan_ortu_1, $keterangan_ortu_2];

		for ($i=0; $i < count($ortu); $i++) { 
			$data_ortu = [
				'id_siswa' 			=> $id_siswa,
				'nama' 				=> $ortu[$i],
				'id_agama'  		=> $agama_ortu[$i],
				'tgl_lahir'  		=> $lahir_ortu[$i],
				'contact' 			=> $contact_ortu[$i],
				'pendidikan' 		=> $pendidikan_ortu[$i],
				'status' 			=> $status[$i],
				'pekerjaan'  		=> $kerja_ortu[$i],
				'penghasilan' 		=> $penghasilan_ortu[$i],
				'kebutuhan_khusus' 	=> $khusus_ortu[$i],
				'keterangan' 		=> $keterangan[$i]
			];

			$this->db->insert('tbl_keluarga', $data_ortu);
		}

		$wali = [
			'id_siswa' 				=> $id_siswa,
			'nama' 					=> $this->input->post('wali'),
			'tgl_lahir' 			=> $this->input->post('lahir_wali'),
			'id_agama' 				=> $this->input->post('agama_wali'),
			'contact' 				=> $this->input->post('contact_wali'),
			'pendidikan' 			=> $this->input->post('pendidikan_wali'), 
			'pekerjaan' 			=> $this->input->post('kerja_wali'),
			'penghasilan'		 	=> $this->input->post('penghasilan_wali'),
			'kebutuhan_khusus' 		=> $this->input->post('khusus_wali'),
			'keterangan' 			=> $keterangan_ortu_3,
			'status' 				=> 'wali'
		];

		if ($this->input->post("wali") != null) {
			$this->db->insert('tbl_keluarga', $wali);
		}
	}

	private function numRegist(){
		
		//  'PKBM';
		$kode2 = 'LENTERA';
		$kode3 = date('y');

		$number_increment = $this->db->query("SELECT * FROM tbl_siswa")->num_rows();
		$number = intval($number_increment)+1;
		$number_generate  ='';
		if (strlen($number_increment)==1){
			$number_generate  = $kode2.'-'.$kode3.'000'.$number;
		}else if (strlen($number_increment)==2){
			$number_generate  = $kode2.$kode3.'.00'.$number;
		}else if (strlen($number_increment)==3){
			$number_generate  = $kode2.$kode3.'.0'.$number;
		}else if (strlen($number_increment)==4){
			$number_generate  = $kode2.'-'.$kode3.$number;
		}else{
			$number_generate  = $kode2.'-'.$kode3.'0001';
		}

		return $number_generate;
	}

	private function upload_file($id, $nm, $name){

		$config['upload_path']          = 'uploads/siswa/'.$id;
		$config['allowed_types']        = 'jpg|png|jpeg|pdf|docx|doc|xls|xlsx';
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($nm)){
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$lampiran = $data['upload_data']['file_name'];
			$x = [
				'id_siswa' 		=> $id,
				'nama'			=> $name,
				'attachment' 	=> $lampiran
			];

			$this->db->insert('tbl_lampiran', $x);
			
		}
	}

	public function tes(){
		echo $this->numRegist();
	}

	public function makeFolder($id){
		mkdir('uploads/siswa/'.$id);
	}



}