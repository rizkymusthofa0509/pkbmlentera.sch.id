<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
	}

	public function index(){

		$this->load->view('template/regform/header');
		$this->load->view('template/regform/body');
		$this->load->view('template/regform/footer');
	}

	public function template_bs(){
		$data['agama'] = $this->db->get('mst_agama');
		$this->load->view("theme/header");
		$this->load->view("theme/form-siswa", $data);
		$this->load->view("theme/footer");

	}

	public function v_data_siswa(){
		$data['agama'] = $this->db->get('mst_agama');
		$data['provinsi'] = $this->db->get('mst_provinsi');
		$data['kabupaten'] = $this->db->get('mst_kabupaten');

		$this->load->view("theme/header");
		$this->load->view("theme/form-data_siswa", $data);
		$this->load->view("theme/footer");		
	}

	public function v_data_orangtua(){
		$data['agama'] = $this->db->get('mst_agama');
		$data['provinsi'] = $this->db->get('mst_provinsi');
		$data['kabupaten'] = $this->db->get('mst_kabupaten');

		$this->load->view("theme/header");
		$this->load->view("theme/form-parent", $data);
		$this->load->view("theme/footer");		
	}


	public function phase_one(){
		$nama_siswa = $this->input->post('nama_siswa');
		$gender = $this->input->post('gender');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nik = $this->input->post('nik');
		$nisn = $this->input->post('nisn');
		$agama = $this->input->post('agama');

		$email = $this->input->post('email');
		$telp = $this->input->post('telp');

		$key = time();


		$tbl_user = [
			'nama' => $nama_siswa,
			'gender' => $gender,
			'tmp_lahir' => $tmp_lahir,
			'tgl_lahir' => strtotime($tgl_lahir),
			'nik' => $nik,
			'nisn' => $nisn,
			'id_agama' => $agama,
			'regist_key' => $key,
			'status_regist' => 0
		];

		$this->db->insert('tbl_siswa', $tbl_user);
		$id_user = $this->db->insert_id();

		$tbl_contact = [
			'id_siswa' => $id_user,
			'telp' => $telp,
			'email' => $email
		];

		$this->db->insert('tbl_contact_siswa', $tbl_contact);
		$this->session->set_userdata(['name' => $nama_siswa, 'id' => $id_user]);

		redirect('registration/v_data_siswa');
	}

	public function phase_two(){
		$kewarnegaraan = $this->input->post('kewarnegaraan');
		$provinsi = $this->input->post('provinsi');
		$kabupaten = $this->input->post('kabupaten');
		$kelurahan = $this->input->post('kelurahan');
		$alamat = $this->input->post('alamat');
		$anak_ke = $this->input->post('anak_ke');
		$jml_saudara = $this->input->post('jml_saudara');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$berat_badan = $this->input->post('berat_badan');

		$id_user = $this->session->userdata('id');

		$tbl_user = [
			'kewarnegaraan' => $kewarnegaraan,
			'anak_ke' => $anak_ke,
			'jml_saudara' => $jml_saudara,
			'tinggi_badan' => $tinggi_badan,
			'berat_badan' => $berat_badan
		];

		$this->db->set($tbl_user);
		$this->db->where('ID', $id_user);
		$this->db->update('tbl_siswa');

		$tbl_alamat = [
			'provinsi' => $provinsi, 
			'kabupaten' => $kabupaten, 
			'kelurahan' => $kelurahan, 
			'alamat' => $alamat,
			'id_siswa' => $id_user
		];

		$this->db->insert('tbl_alamat', $tbl_alamat);

		redirect('registration/v_data_orangtua');
	}

	public function phase_three(){
		$name_1 = $this->input->post('name_1');
		$name_2 = $this->input->post('name_2');
		$nik_1 = $this->input->post('nik_2');
		$nik_2 = $this->input->post('nik_2');
		$tgl_1 = $this->input->post('tgl_1');
		$tgl_2 = $this->input->post('tgl_2');
		$agama_1 = $this->input->post('agama_1');
		$agama_2 = $this->input->post('agama_2');
		$pendidikan_1 = $this->input->post('pendidikan_1');
		$pendidikan_2 = $this->input->post('pendidikan_2');
		$pekerjaan_1 = $this->input->post('pekerjaan_1');
		$pekerjaan_2 = $this->input->post('pekerjaan_2');
		$penghasilan_1 = $this->input->post('penghasilan_1');
		$penghasilan_2 = $this->input->post('penghasilan_2');

		$id_siswa = $this->session->userdata('id');


		//bapak
		$data_bapak = [
			'id_siswa' 	=> $id_siswa,
			'nama' 		=> $name_1,
			'status' 	=> 1,
			'tgl_lahir' => strtotime($tgl_1),
			'id_agama' 	=> $agama_1,
			'nik' 		=> $nik_1
		];

		$this->db->insert('tbl_keluarga', $data_bapak);
		$id_bapak = $this->db->insert_id();

		$dt_pndidik = [
			'id_keluarga' => $id_bapak,
			'pendidikan' => $pendidikan_1
		];
		$this->db->insert('tbl_pendidikan_keluarga', $dt_pndidik);

		$dt_penghasilan_bpk = [
			'id_keluarga' => $id_bapak,
			'nama' => $pekerjaan_1,
			'penghasilan' => $penghasilan_1
		];

		$this->db->insert('tbl_pekerjaan', $dt_penghasilan_bpk);


		//ibu
		$data_ibu = [
			'id_siswa' 	=> $id_siswa,
			'nama' 		=> $name_2,
			'status' 	=> 2,
			'tgl_lahir' => strtotime($tgl_2),
			'id_agama' 	=> $agama_2,
			'nik' 		=> $nik_2
		];

		$this->db->insert('tbl_keluarga', $data_ibu);
		$id_ibu = $this->db->insert_id();

		$dt_pndidik = [
			'id_keluarga' => $id_ibu,
			'pendidikan' => $pendidikan_2
		];
		$this->db->insert('tbl_pendidikan_keluarga', $dt_pndidik);

		$dt_penghasilan_ibu = [
			'id_keluarga' => $id_ibu,
			'nama' => $pekerjaan_2,
			'penghasilan' => $penghasilan_2
		];

		$this->db->insert('tbl_pekerjaan', $dt_penghasilan_ibu);

		echo "success";

	}

	public function te(){
		$this->load->view('test');
	}



}
