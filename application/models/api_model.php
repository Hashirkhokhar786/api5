<?php

class api_model extends CI_Model 
{
    
    
	function insert_api($data)
	{
		$this->db->insert('tbl_name', $data);
	}
        
}

?>