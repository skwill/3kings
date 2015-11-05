<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('table_names.php');

class app extends  MY_Controller{

	#default construct - construct stuff \(o.O)/
	function __construct() {
		parent::__construct();		
	}

	function index(){
		if ($this->session->userdata('logged')) 
		{	
			/*$data['users'] = $this->user_model->get_single_user($user_data['User_id']);
			$this->load->view('registered/my_page', $data);*/

			$data['orders'] = $this->instance->dm->getOrders('orders');
			$this->load->view('app/index', $data);

			//var_dump($data['orders']);
		}

		else
		{
			redirect('dashboard');
		}
	}

}