<?php

class Api_model extends CI_Model
{
	//database operations
	function __construct(argument)
	{
		# code...
	}
	function fetch_all(){
		$this->db->order_by('id','DESC');
		return $this->db->('tbl_sample');
		
	}
}

?>