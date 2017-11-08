<?php
/**
* 
*/
class Model1 extends CI_Model
{
	
	function all_product()
	{
		$qry=$this->db->query("SELECT * FROM products");
		return $qry->result();
	}
}
?>