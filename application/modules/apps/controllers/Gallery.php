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
class Gallery extends CI_Controller
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
		$data['pages']  = 'blogs/list'; 
		$this->load->view('main',$data);
		 
	}

    public function created()
    {
        $data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Dashboard';
		$data['link']   = array(
			'Dashboard',
		);
		$data['pages']  = 'blogs/create'; 
		$this->load->view('main',$data);
    }

    public function saved()
    {
        $data[''] = post(''); 
        $insert = $this->db->insert('',$data);
        if ($insert){
            return redirect('/blogs'); 
        }
    }

    public function edit($id='')
    {
        $data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Dashboard';
		$data['link']   = array(
			'Dashboard',
		);
		$data['pages']  = 'blogs/list'; 
        $data['detail'] = $this->db->query("SELECT * FROM tbl_ WHERE id='$id' ")->row_array();
		$this->load->view('main',$data);
    }

    public function updated()
    {
        $data[''] = post('');
        $update = $this->db->where('id',post('id'));
        $update = $this->db->update('',$data);
        if ($update){
            return redirect('/blogs'); 
        }
    }

	 
}
