<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data_model extends MY_Model {

	// set table name as needed from library
	public function set_tbl_name($table_name) {
		$this->table_name = $table_name;
	}	

	public function login($email, $password){
		$this -> db -> select('id, username, email, password');
	   	$this -> db -> from('user');
	   	$this -> db -> where('email', $email);
		$this -> db -> where('password', $password);
		$this -> db -> limit(1);
		 
		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1){
			return $query->result();
		}
		else{
		    return false;
		}
	}

	public function get($table, $activate){
		$query = $this->db->get_where($table, array('activate' => $activate),1);
		return $query->result();
	}

	public function getNewOrders($table){
		$query = $this->db->get_where($table, array('status'=>"new"));
		return $query->result();
	}

	public function getOldOrders($table){
		$query = $this->db->get_where($table, array('status'=>"old"));
		return $query->result();
	}

	public function updateOld($id){
		$data = array(
               'status' => 'Old'
            );

		$this->db->where('id', $id);
		$result = $this->db->update('orders', $data);

		return $result;
	}

	public function undo($id){
		$data = array(
               'status' => 'New'
            );

		$this->db->where('id', $id);
		$result = $this->db->update('orders', $data);

		return $result;
	}
}