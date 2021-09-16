<?php
/*
-- ---------------------------------------------------------------
-- MASTER
-- CREATED BY : RIZKY MUSTHOFA
-- COPYRIGHT  : Copyright (c) 2020 
-- LICENSE    : http://opensource.org/licenses/MIT  MIT License
-- CREATED ON : 2020-06-09
-- UPDATED ON : V.1
-- APP NAME   : MASTER
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model{
	
	function __construct()
    {
         parent::__construct();
         $this->load->library('session');
    }
 

    public function getAllSiswa()
    {
        $this->db->select('mst_paket.name as paket_name, mst_gelombang.name as gelombang_name, tbl_siswa.*');
        $this->db->from('tbl_siswa'); 
        $this->db->join('mst_paket','mst_paket.id = tbl_siswa.paket_id','left');
        $this->db->join('mst_gelombang','mst_gelombang.id = tbl_siswa.gelombang_id','left');  
        $query = $this->db->get();
        return $query;
    }
    
}
?>