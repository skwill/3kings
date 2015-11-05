<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->instance = & get_instance();
		$this->instance->load->model('data_model', 'dm');	

		
	}

	function addEntry($post, $table){
		$fields = $this->db->list_fields($table);

		$x = 1;
		foreach ($post as $field) {
			$data[$fields[$x]] = $field;
			$x++;
		}
		if ($this->instance->dm->addData($data, $table)) {
			return true;
		}
		else{
			return false;
		}
		
	}


}