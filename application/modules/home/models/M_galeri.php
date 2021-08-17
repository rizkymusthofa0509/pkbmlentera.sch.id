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

class M_galeri extends CI_Model{
	
	function __construct()
    {
         parent::__construct();
         $this->load->library('session');
    }

     

    function getAllImage()
    {
        // $this->db->select('division.name as div_name,department.name as dep_name, jabatan.name as jab_name,employee.*');
        $this->db->select('tbl_gallery.*');
        $this->db->from('tbl_gallery');
        // $this->db->join('employee','employee.badge_number = attendance.badge_number','left');
        // $this->db->where('TIME(attendance.time_in) > ',timeIn());
        $this->db->where('tbl_gallery.tipe','image');
        // $this->db->order_by('attendance.time_in', 'ASC');
        $query = $this->db->get();
        return $query;
    }
    function getAllImageWhere($id='')
    {
        // $this->db->select('division.name as div_name,department.name as dep_name, jabatan.name as jab_name,employee.*');
        $this->db->select('tbl_gallery.*');
        $this->db->from('tbl_gallery');
        // $this->db->join('employee','employee.badge_number = attendance.badge_number','left');
        // $this->db->where('TIME(attendance.time_in) > ',timeIn());
        $this->db->where('tbl_gallery.tipe','image');
        $this->db->where('tbl_gallery.id',$id);
        // $this->db->order_by('attendance.time_in', 'ASC');
        $query = $this->db->get();
        return $query;
    }
    function getAllVideo()
    {
        // $this->db->select('division.name as div_name,department.name as dep_name, jabatan.name as jab_name,employee.*');
        $this->db->select('tbl_gallery.*');
        $this->db->from('tbl_gallery');
        // $this->db->join('employee','employee.badge_number = attendance.badge_number','left');
        // $this->db->where('TIME(attendance.time_in) > ',timeIn());
        $this->db->where('tbl_gallery.tipe','video');
        // $this->db->order_by('attendance.time_in', 'ASC');
        $query = $this->db->get();
        return $query;
    }
    function getAllVideoWhere($id='')
    {
        // $this->db->select('division.name as div_name,department.name as dep_name, jabatan.name as jab_name,employee.*');
        $this->db->select('tbl_gallery.*');
        $this->db->from('tbl_gallery');
        // $this->db->join('employee','employee.badge_number = attendance.badge_number','left');
        // $this->db->where('TIME(attendance.time_in) > ',timeIn());
        $this->db->where('tbl_gallery.tipe','video');
        $this->db->where('tbl_gallery.id',$id);
        // $this->db->order_by('attendance.time_in', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    

}
?>