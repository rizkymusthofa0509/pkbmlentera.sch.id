<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_auth');

		// Login Validasi
		// login();
	}

	public function index(){ 
		$data['title'] = 'Login Pages';
		$this->load->view('panel/auth',$data);
	}  

	public function checking()
	{
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 

		$auth     = $this->M_auth->account($username,$password);
		if ($auth->num_rows() > 0){
			$data = $auth->row_array();
			$this->session->set_userdata('id',$data['id']);
			$this->session->set_userdata('nama',$data['nama']);
			$this->session->set_userdata('level',$data['level']);
			redirect('panel/home');
		}else{
			$this->session->set_userdata('message','<div class="alert alert-danger">
												       Username or Password is wrong.
												    </div>');
			redirect('panel/auth');
		}

			

	}

	public function logout()
	{
		session_destroy();
		redirect('panel/auth');
	}

}