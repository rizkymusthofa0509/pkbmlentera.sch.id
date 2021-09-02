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
		// login(); 
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$data['title'] 	= 'PKBM - Admin Panel';
		$data['modul']  = 'Dashboard';
		$data['link']   = array(
			'Dashboard',
		);
		$data['pages']  = 'crud/home';
		$crud = new grocery_CRUD(); 
		$crud->set_theme('datatables');
		$crud->set_table('tbl_blog');
		$crud->set_subject('Data Blog');
		$crud->required_fields('title');
		$crud->columns('title','file','is_active','description','created_at');
		// $crud->fields('judul','Gambar','Status','Deskripsi','Created at');
		$display = [
			'title'=>'judul',
			'file'=>'Gambar',
			'is_active'=>'Status',
			'description'=>'Content Blog',
			'created_at'=>'Dibuat pada',
		];
		$crud->display_as($display);

		$output = $crud->render();

		$this->load->view('main', $data);
		// $crud = new grocery_CRUD(); 
		// $crud->set_theme('datatables');
		// $crud->set_table('tbl_blog');
		// $crud->set_subject('Data Blog');
		// $crud->required_fields('title');
		// $crud->columns('title','file','is_active','description','created_at');
		// // $crud->fields('judul','Gambar','Status','Deskripsi','Created at');
		// $display = [
		// 	'title'=>'judul',
		// 	'file'=>'Gambar',
		// 	'is_active'=>'Status',
		// 	'description'=>'Content Blog',
		// 	'created_at'=>'Dibuat pada',
		// ];
		// $crud->display_as($display);

		// $output = $crud->render();

		// $this->_example_output($output);
	}

	function _example_output($output = null) 
    {
        $this->load->view('test',$output);    
    } 
}
