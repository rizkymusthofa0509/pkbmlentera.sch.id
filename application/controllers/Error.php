<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		echo "<h1>Tidak Ditemukan</h1>";
	} 

}