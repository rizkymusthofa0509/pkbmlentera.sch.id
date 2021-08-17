<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
 	function __construct() {
	    parent::__construct(); 

	    /*Load session*/
	    // $this->load->library('session');
	    /*Model*/
	    $this->load->model(array('M_blogs','M_galeri'));  
	    // $this->load->helper('dompet_helper');  
	    // login(); 
	}

	public function index()
	{
		$data['title'] = '';
		$data['pages'] = 'home/home';
		$data['blogs'] = $this->M_blogs->getAll();
		$data['galImage'] = $this->M_galeri->getAllImage();
		$this->load->view('main',$data);
	}

	
	
	 

 	 

}




















