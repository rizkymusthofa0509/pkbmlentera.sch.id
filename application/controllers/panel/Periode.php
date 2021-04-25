<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_periode');

		// Login Validasi
		login();
	}

	public function index()
	{
		return redirect('panel/periode/pages');
	}

	public function pages($action='',$id='')
	{
		switch ($action) {
			case 'create':
				$data['title'] = 'Tambah periode';
				$data['modul'] = 'Tambah Periode';
				$data['pages'] = 'panel/periode/add'; 
				$this->load->view('panel/main',$data);
			break;
			case 'edit':
				$data['title'] = 'Tambah periode';
				$data['modul'] = 'Update Periode';
				$data['pages'] = 'panel/periode/edit'; 
				$data['detail'] = $this->M_periode->find($id)->row_array();
				$this->load->view('panel/main',$data);
			break;

			case 'store':
				$i['nama']		= $this->input->post('nama');
				$i['status']	= $this->input->post('status');
				$i['start']		= $this->input->post('start');
				$i['finish']	= $this->input->post('finish');
				$this->db->insert('mst_gelombang',$i);
				return redirect('panel/periode/pages');
			break;
			case 'update':
				$i['nama']		= $this->input->post('nama');
				$i['status']	= $this->input->post('status');
				$i['start']		= $this->input->post('start');
				$i['finish']	= $this->input->post('finish'); 
				$this->db->where(array('ID'=>$this->input->post('ID')));
				$this->db->update('mst_gelombang',$i);
				return redirect('panel/periode/pages');
			break;
			case 'destroy':
				$this->db->delete('mst_gelombang',array('ID'=>$id));
				return redirect('panel/periode/pages');
			break;

			
			default:
				$data['title'] = 'Peserta didik';
				$data['modul'] = 'Peserta didik ';
				$data['pages'] = 'panel/periode/home'; 

				$data['list'] = $this->M_periode->getAll();
				$this->load->view('panel/main',$data);
			break;
		}
	}  


	
 
}