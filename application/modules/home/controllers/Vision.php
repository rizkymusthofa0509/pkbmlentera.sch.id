<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Vision extends CI_Controller {
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
		$data['pages'] = 'vision/list';  
		$this->load->view('main',$data);
	}
 
	
	
	 

 	 

}




















