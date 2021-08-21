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

class pembayaran_model extends CI_Model{
	
	function __construct()
    {
         parent::__construct();
         $this->load->library('session');
    }
 

    public function getAllPembayaran($siswa_id='')
    {
        $this->db->select('tbl_pembayaran.*');
        $this->db->from('tbl_pembayaran'); 
        $this->db->where(array('siswa_id'=>$siswa_id)); 
        $query = $this->db->get();
        return $query;
    }
    
}
?>