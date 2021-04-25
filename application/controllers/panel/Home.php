<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');

		// Login Validasi
		login();
	}

	public function index(){ 
		$data['title'] = 'Dashboard';
		$data['modul'] = 'Dashboard Monitor';
		$data['pages'] = 'panel/dashboard/home';


		$data['list'] = $this->M_siswa->getAll();


		// $this->session->set_userdata('notif','
		// 								<div class="callout callout-info">
		// 					            <h4>Info!</h4> 
		// 					            <p>Message.</p>
		// 					          </div>
		// 							');

		$this->load->view('panel/main',$data);

		

	}  


	
 
}