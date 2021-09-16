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
defined('BASEPATH') or exit('No direct script access allowed');
class Apps extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		/*Load session*/
		// $this->load->library('session');
		/*Model*/
		// $this->load->model('M_employee');  
		// $this->load->helper('dompet_helper');  
		login();  
	}

	public function index()
	{
		$data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Dashboard';
		$data['link']   = array(
			'Dashboard',
		);
		$data['pages']  = 'dashboard/home';

		$this->load->view('main',$data);
		 
	}

	 
}
