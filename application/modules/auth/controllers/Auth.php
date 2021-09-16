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
class Auth extends CI_Controller
{
	function __construct()
	{
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
			'Dashboard',
		);

		$this->load->view('login',$data);
		 
	}

	public function prosess()
	{
		$username = post('username');
		$password = post('password');
		$cek = $this->db->query("SELECT * FROM tbl_login WHERE username='$username' AND `password`='$password' ");
		if ($cek->num_rows() > 0){
			$res 				  = $cek->row_array();
			$data['id'] 	  = $res['id'];
			$data['fullname'] = $res['fullname'];
			$this->session->set_userdata($data); 
			return redirect('/apps');
		}else{
			return redirect('/auth');
		} 
	}

	public function logout()
	{
		session_destroy();
		return redirect('/auth');
	}

	 
}
