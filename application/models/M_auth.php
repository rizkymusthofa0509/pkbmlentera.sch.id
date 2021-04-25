<?php 

class M_auth extends CI_Model{
	
	public function account($username='',$password=''){
		return $this->db->query("SELECT * FROM tbl_account WHERE (email='$username' OR username='$username') AND password='$password' ");
	}
 
}