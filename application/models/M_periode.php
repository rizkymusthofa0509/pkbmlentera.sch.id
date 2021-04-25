<?php 

class M_periode extends CI_Model{
	
	public function getAll(){
		$this->db->select('*');
        $this->db->from('mst_gelombang'); 
        $this->db->order_by('ID', 'DESC');
        $query = $this->db->get();
        return $query;
	}
 	
 	public function find($id='')
 	{
 		$this->db->select('*');
        $this->db->from('mst_gelombang'); 
        $this->db->where('ID',$id);
        $this->db->order_by('ID', 'DESC');
        $query = $this->db->get();
        return $query;
 	}

}