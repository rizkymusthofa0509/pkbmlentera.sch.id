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
class Siswa extends CI_Controller {
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

    public function email()
    {
        $data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Data Siswa';
		$data['link']   = array('Dashboard'     => 'apps',
								 'Siswa'        => 'apps',
								 'E-mail'        => 'apps'
						  );
		$data['pages']  = 'siswa/email'; 
        $data['siswa']  = $this->siswa_model->getAllSiswa();
		$this->load->view('main',$data); 
    }

    public function bantuan()
    {
        $data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Data Siswa';
		$data['link']   = array('Dashboard'     => 'apps',
								 'Siswa'        => 'apps',
								 'Bantuan'        => 'apps'
						  );
		$data['pages']  = 'siswa/bantuan'; 
        $data['siswa']  = $this->siswa_model->getAllSiswa();
		$this->load->view('main',$data); 
    }

    public function account()
    {
        $data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Data Siswa';
		$data['link']   = array('Dashboard'     => 'apps',
								 'Siswa'        => 'apps',
								 'Account'        => 'apps'
						  );
		$data['pages']  = 'siswa/account'; 
        $data['siswa']  = $this->siswa_model->getAllSiswa();
		$this->load->view('main',$data); 
    }

    public function alamat()
    {
        $data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Data Siswa';
		$data['link']   = array('Dashboard'     => 'apps',
								 'Siswa'        => 'apps',
								 'Alamat'        => 'apps'
						  );
		$data['pages']  = 'siswa/alamat'; 
        $data['siswa']  = $this->siswa_model->getAllSiswa();
		$this->load->view('main',$data); 
    }
 
 	 

}




















