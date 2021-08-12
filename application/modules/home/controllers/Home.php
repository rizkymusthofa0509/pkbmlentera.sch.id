<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
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
		$data['title'] = '';
		$data['pages'] = '';
		$this->load->view('main',$data);
	}
	
	 

 	 

}




















