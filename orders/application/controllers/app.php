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
			
			$this->load->view('app/_header');
			$this->load->view('app/index'/*, $data*/);
			$this->load->view('app/_footer');

			//var_dump($data['orders']);
		}

		else
		{
			redirect('dashboard');
		}
	}

	function getNewOrders(){
		$data['orders'] = $this->instance->dm->getNewOrders('orders');
		echo json_encode($data);
	}

	function getOldOrders(){
		$data['orders'] = $this->instance->dm->getOldOrders('orders');

		echo json_encode($data);
	}

	function fulfill($id){
		if ($this->instance->dm->updateOld($id)) {
			$message = 'success';
			echo json_encode($message);
		}else{
			$message = 'error';
			echo json_encode($message);
		}
		
	}

	function undo($id){
		if ($this->instance->dm->undo($id)) {
			$message = 'success';
			echo json_encode($message);
		}else{
			$message = 'error';
			echo json_encode($message);
		}
	}

}