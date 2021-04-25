<?php 

class M_siswa extends CI_Model{
	
	// function all(){
	// 	return $this->db->query("SELECT * FROM view_siswa");
	// }

	// function get_where($id=''){
	// 	return $this->db->query("SELECT * FROM view_siswa WHERE ID='$id' ");
	// }
 
	function getAll()
	{
		$this->db->select('
			mst_agama.nama as agama_nama,
			mst_paket.nama as paket_nama, mst_paket.kode as paket_kode, 
			tbl_siswa.*');
        $this->db->from('tbl_siswa');
        $this->db->join('mst_paket','mst_paket.ID = tbl_siswa.id_paket','left');
        $this->db->join('mst_agama','mst_agama.ID = tbl_siswa.id_agama','left');
        // $this->db->where('tbl_siswa.tanggal',$tanggal);
        $this->db->order_by('tbl_siswa.ID', 'DESC');
        $query = $this->db->get();
        return $query;
	}

	function getWhere($id='')
	{
		$this->db->select('
			mst_agama.nama as agama_nama,
			mst_paket.nama as paket_nama, mst_paket.kode as paket_kode, 
			tbl_siswa.*');
        $this->db->from('tbl_siswa');
        $this->db->join('mst_paket','mst_paket.ID = tbl_siswa.id_paket','left');
        $this->db->join('mst_agama','mst_agama.ID = tbl_siswa.id_agama','left');
        $this->db->where('tbl_siswa.ID',$id);
        $this->db->order_by('tbl_siswa.ID', 'DESC');
        $query = $this->db->get();
        return $query;
	}

}