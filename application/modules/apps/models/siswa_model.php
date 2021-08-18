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

    function getAll($tanggal='')
    {
        // $this->db->select('division.name as div_name,department.name as dep_name, jabatan.name as jab_name,employee.*');
        $this->db->select('attendance.tanggal,attendance.time_in,attendance.time_out, employee.*');
        $this->db->from('attendance');
        $this->db->join('employee','employee.badge_number = attendance.badge_number','left');
        // $this->db->where('TIME(attendance.time_in) > ',timeIn());
        $this->db->where('attendance.tanggal',$tanggal);
        $this->db->order_by('attendance.time_in', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    function getAllProfile($badge_number='')
    {
        $this->db->select('attendance.*');
        $this->db->from('attendance');
        $this->db->where('attendance.badge_number',$badge_number);
        $this->db->order_by('attendance.tanggal', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    function late($tanggal)
    {
        // $this->db->select('division.name as div_name,department.name as dep_name, jabatan.name as jab_name,employee.*');
        $this->db->select('attendance.tanggal,attendance.time_in,attendance.time_out, employee.*');
        $this->db->from('attendance');
        $this->db->join('employee','employee.badge_number = attendance.badge_number','left');
        $this->db->where('TIME(attendance.time_in) > ',timeIn().':59');
        $this->db->where('attendance.tanggal',$tanggal);
        $this->db->order_by('attendance.time_in', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    function onTime($tanggal)
    {
        // $this->db->select('division.name as div_name,department.name as dep_name, jabatan.name as jab_name,employee.*');
        $this->db->select('attendance.tanggal,attendance.time_in,attendance.time_out, employee.*');
        $this->db->from('attendance');
        $this->db->join('employee','employee.badge_number = attendance.badge_number','left');
        $this->db->where('TIME(attendance.time_in) <= ',timeIn().':59');
        $this->db->where('attendance.tanggal',$tanggal);
        $this->db->order_by('attendance.time_in', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    function hariLibur($periode='')
    {
        $this->db->select('attendance_hari_libur.*');
        $this->db->from('attendance_hari_libur'); 
        if ($periode!=""){
             $this->db->where('periode',$periode); 
        }
        $this->db->order_by('tanggal', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    

}
?>