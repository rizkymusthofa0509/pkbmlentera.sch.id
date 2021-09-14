<?php defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Register extends CI_Controller {

 	function __construct() {
	    parent::__construct(); 
	    require APPPATH.'libraries/phpmailer/src/Exception.php';
        require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
        require APPPATH.'libraries/phpmailer/src/SMTP.php';
		$this->load->helper('form');
		$this->load->model('m_register', 'regist');
	}

	public function index(){
		$data = [
			'title'			=> 'Form Registration',
			'paket' 		=> $this->regist->getData('mst_paket')->result(),
			'gelombang' 	=> $this->regist->getData('mst_gelombang', ['is_active' => 1])->result()
		];

		$this->load->view('header', $data);
		$this->load->view('main', $data);
		$this->load->view('footer');
	}

	public function process_register(){
		$id_siswa = $this->insertGetId();
		$this->processParent($id_siswa);

		mkdir('uploads/siswa/'.$id_siswa, 0777, true);

		$this->upload_file($id_siswa, 'file_kk', 'lampiran_kk');
		$this->upload_file($id_siswa, 'file_akta', 'lampiran_akta');
		$this->upload_file($id_siswa, 'file_foto', 'lampiran_foto');

		$this->_sendEmail($id_siswa);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran berhasil! <br> Silahkan Konfirmasi ke admin<br> 
			<a href="/home">Klik untuk Kembali</a>
			</div>');
		redirect('register');
	}

	private function insertGetId(){
		$kip = $this->input->post('kip_number');
		if ($kip == '') {
			$is_kip = 0;
		} else {
			$is_kip = 1;
		}

		$user = [
			'first_name' 			=> $this->input->post('first_name'),
			'last_name' 			=> $this->input->post('last_name'),
			'username' 				=> $this->input->post('username'),
			'password'				=> $this->input->post('password'),
			'email'					=> $this->input->post('email'),
			'paket_id'				=> $this->input->post('paket_id'),
			'gelombang_id'			=> $this->input->post('gelombang_id'),
			'gender'  				=> $this->input->post('gender'),
			'pob'					=> $this->input->post('tmp_lahir'),
			'dob'					=> $this->input->post('tgl_lahir'),
			'religion'				=> $this->input->post('agama'),
			'kewarganegaraan' 		=> $this->input->post('kewarnegaraan'),
			'akta' 					=> $this->input->post('akta'),
			'nik' 					=> $this->input->post('nik'),
			'nis' 					=> $this->input->post('nis'),
			'nisn' 					=> $this->input->post('nisn'),
			'skhun' 				=> $this->input->post('skhun'),
			'address'				=> $this->input->post('address'),
			'status_tempat_tinggal' => $this->input->post('jenis_tinggal'),
			'is_kip'				=> $is_kip,
			'kip_number'			=> $kip,
			'nomor_telp'			=> $this->input->post('nomor_telp'),
			'tinggi_badan' 			=> $this->input->post('tinggi'),
			'berat_badan' 			=> $this->input->post('berat'),
			'created_date' 			=> date('Y:m:d', time()),
			'updated_date' 			=> date('Y:m:d', time()),
		];
		$this->db->insert('tbl_siswa', $user);
		$id = $this->db->insert_id();
		return $id;
	}


	//Insert data orangtua
	private function processParent($id_siswa){
		$ortu  				= $this->input->post("ortu");
		$ortu_pob 			= $this->input->post("ortu_pob");
		$ortu_dob 			= $this->input->post("ortu_dob");
		$agama_ortu 		= $this->input->post("agama_ortu");
		$contact_ortu 		= $this->input->post("contact_ortu");
		$pendidikan_ortu 	= $this->input->post("pendidikan_ortu");
		$kerja_ortu 		= $this->input->post("kerja_ortu");
		$penghasilan_ortu 	= $this->input->post("penghasilan_ortu");
		$khusus_ortu 		= $this->input->post("khusus_ortu");
		$keterangan_ayah 		= $this->input->post("keterangan_ortu_1");
		$keterangan_ibu 		= $this->input->post("keterangan_ortu_2");

		$data = [
			'ayah_nama' 			=> $ortu[0],
			'ayah_pob'				=> $ortu_pob[0],
			'ayah_dob' 				=> $ortu_dob[0],
			'ayah_religion' 		=> $agama_ortu[0],
			'ayah_contact' 			=> $contact_ortu[0],
			'ayah_education' 		=> $pendidikan_ortu[0],
			'ayah_work' 			=> $kerja_ortu[0],
			'ayah_penghasilan' 		=> $penghasilan_ortu[0],
			'ayah_kebutuhan_khusus' => $khusus_ortu[0],
			'ayah_hidup'			=> $keterangan_ayah,
			'ibu_nama' 				=> $ortu[1], 
			'ibu_pob'				=> $ortu_pob[1],
			'ibu_dob' 				=> $ortu_dob[1], 
			'ibu_religion' 			=> $agama_ortu[1], 
			'ibu_contact' 			=> $contact_ortu[1],
			'ibu_education' 		=> $pendidikan_ortu[1],
			'ibu_work' 				=> $kerja_ortu[1],
			'ibu_penghasilan' 		=> $penghasilan_ortu[1], 
			'ibu_kebutuhan_khusus' 	=> $khusus_ortu[1], 
			'ibu_hidup'				=> $keterangan_ibu,
		];

		$this->regist->updateData($data, ['id' => $id_siswa]);

	}

	private function upload_file($id, $fieldName, $fieldDB){
		if ($_FILES[$fieldName]['error'] !== 4){
			$config['upload_path']          = 'uploads/siswa/'.$id;
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['encrypt_name'] 		= TRUE;
			$config['max_size']             = 10000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload($fieldName)){
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			}else{
				$data 	= array('upload_data' => $this->upload->data());
				$attach = $data['upload_data']['file_name'];
				$data 	= [ $fieldDB => $attach];

				$this->regist->updateData($data, ['id' => $id]);
			}
		}
	}
	
	private function _sendEmail($id){
        $x = $this->regist->getData('tbl_siswa', ['id' => $id])->row();
        $email = $x->email;
        $mail  = new PHPMailer();
       
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'pkbmlentera.sch.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'system@pkbmlentera.sch.id'; // user email
        $mail->Password = 'adminadmin@321'; // password email
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('system@pkbmlentera.sch.id', ''); // user email
        $mail->addReplyTo('no-reply@pkbmlentera.sch.id', ''); //user Email

        // Add a recipient
        $mail->addAddress($email);

        // Set email format to HTML
        $mail->isHTML(true);
		$mail->Subject 	= 'PKBM Lentera | Registration complete';
		$mail->Body 	= $this->load->view('email', [], true);
        // Send email
        if(!$mail->send()){
            return $mail->ErrorInfo;
        }else{
        	return 'Sended';
        }
	}

	public function tesu($id){
		echo $this->_sendEmail($id);
	}

	 

 	 

}




















