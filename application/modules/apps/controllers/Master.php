<?php
/*
-- ---------------------------------------------------------------
-- JOB CAREER 
-- CREATED BY : RIZKY MUSTHOFA
-- COPYRIGHT  : Copyright (c) 2020 
-- LICENSE    : http://opensource.org/licenses/MIT  MIT License
-- CREATED ON : 2020-06-09
-- UPDATED ON : V.1
-- APP NAME   : JOB CAREER
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Master extends CI_Controller {
 	function __construct() {
	    parent::__construct(); 

	    /*Load session*/
	    // $this->load->library('session');
	    /*Model*/
	    $this->load->model(array('siswa_model'));  
	    // $this->load->helper('dompet_helper');  
	    // login(); 
	}
	
	public function index()
	{ 
		$data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Data Siswa';
		$data['link']   = array('Dashboard'     => 'apps',
								 'Siswa'        => 'apps'
						  );
		$data['pages']  = 'siswa/data_siswa/list'; 
        $data['siswa']  = $this->siswa_model->getAllSiswa();
		$this->load->view('main',$data); 
	}

 	 

}




















