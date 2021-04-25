<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');

		// Login Validasi
		login();
	}

	public function index(){ 
		redirect('panel/home');

	}

	public function siswa($action='',$id='')
	{
		switch ($action) {
			case 'edit':
				$data['title'] = 'Peserta Didik';
				$data['modul'] = 'Update Data';
				$data['pages'] = 'panel/pages/siswa/edit';
				$data['det']   = $this->M_siswa->getWhere($id)->row_array();
				$this->load->view('panel/main',$data);
			break;
			
			default:
				$data['title'] = 'Peserta didik';
				$data['modul'] = 'Peserta didik ';
				$data['pages'] = 'panel/pages/siswa/list';


				$data['list'] = $this->M_siswa->getAll();
				$this->load->view('panel/main',$data);
			break;
		}
	}  


	
 
}