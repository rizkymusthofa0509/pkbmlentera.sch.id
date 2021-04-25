<?php 

class M_regist extends CI_Model{
	
	public function get_kab($where){
		return $this->db->get_where("mst_kabupaten", ['id_prov' => $where]);
	}

	public function get_prov(){
		return $this->db->get("mst_provinsi");
	}
}