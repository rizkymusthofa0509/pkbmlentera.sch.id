<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model{
	
	function __construct(){
         parent::__construct();
         $this->load->library('session');
    }


    public function getData($table, $where = ''){
        if ($where == '') {
            return $this->db->get($table);
        } else {
            return $this->db->get_where($table, $where);
        }
    }

    public function updateData($data, $where){
        $this->db->update('tbl_siswa', $data, $where);
    }


    

}