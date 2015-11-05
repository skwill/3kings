<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* MY_Model CI Model override that features basic S-CRUD Functionality
*/

class MY_Model extends CI_Model {

	function addData($data, $table){
		//$data = array();
		return $this->db->insert($table, $data);
	}

	function deleteData($table, $id){
		$this->db->delete($table, array('id' => $id)); 
	}
	
	function check_duplicate($key, $table, $tbl_field){		
	    $this->db->where($tbl_field, $key);
	    $query = $this->db->get($table);
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}	
}