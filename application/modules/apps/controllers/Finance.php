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
class Finance extends CI_Controller {
 	function __construct() {
	    parent::__construct(); 

	    /*Load session*/
	    // $this->load->library('session');
	    /*Model*/
	    // $this->load->model('M_employee');  
	    // $this->load->helper('dompet_helper');  
	    // login(); 
	}
	
	public function index()
	{ 
		$data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Dashboard';
		$data['link']   = array(
                                'Dashboard'     => 'apps',
                                'Data Keuangan'     => 'apps',
                                'Siswa'     => 'apps',
						  );
		$data['pages']  = 'finance/list'; 
		$this->load->view('main',$data); 
	}
 
 	 

}




















