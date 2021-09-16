<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Video extends CI_Controller {
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
		$data['pages'] = 'video/list'; 
		$data['galVideo'] = $this->M_galeri->getAllVideo();
		$this->load->view('main',$data);
	}

    public function detail($id='')
    {
        $data['title'] = '';
		$data['pages'] = 'blog/single';
		$data['blog'] = $this->M_blogs->getWhere($id)->row_array();
		$data['blogs'] = $this->M_blogs->getAll();
		$this->load->view('main',$data);
    }

	
	
	 

 	 

}




















