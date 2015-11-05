<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('table_names.php');

class dashboard extends  MY_Controller{

	#default construct - construct stuff \(o.O)/
	function __construct() {
		parent::__construct();

		
	}

	public $errorCount = 0;

	function index(){
		$data['error'] = "";

		$this->load->view('template/_header');
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('template/_footer');
	}

	/*function register(){
		if ($_SERVER["REQUEST_METHOD"] == "POST"){			

			$temp_result = $this->instance->dm->check_duplicate($_POST['email'], TBL_TEMP, 'email');

			$user_result = $this->instance->dm->check_duplicate($_POST['email'], TBL_USER, 'email');

			if($temp_result == true || $user_result == true){
				$response = "A user with this email already exists";
				echo json_encode($response);
			}
			else{				
				$_POST['password'] = sha1($_POST['password']);

				$post_data = $_POST;
				$post_data['activate'] = sha1($post_data['email']);

				$response = $this->addEntry($post_data, TBL_TEMP);	


				$this->email->from('skw17@live.com', 'Spliffy');
				$this->email->to('stephanwilliams1@gmail.com');
				$this->email->subject('iSpent Registration');
				$this->email->message('Thank you for registering with iSpent! Please click the button to activate your account now! <br/> <a href="http://localhost/ispent/dashboard/activate/'.urlencode($post_data['activate']).'">Activate<a/>');
				$this->email->send();

				$response = "Please check your email to confirm";
				echo json_encode($response);
			}			
		}		
	}*/

	/*function activate($activate){
		$query = $this->instance->dm->get(TBL_TEMP,$activate);
		
		if (!empty($query)) {
			foreach ($query as $temp) {
				$user_id = $temp->id;
				$data['username'] = $temp->username;
				$data['email'] = $temp->email;
				$data['password'] = $temp->password;
			}		

			$this->instance->dm->deleteData(TBL_TEMP, $user_id);
					
			$this->addEntry($data, TBL_USER);	

			$this->login($data['email'], $data['password']);
		}
		else{
			echo "Your Activation Link Has Expired. Please Re-Register";
		}				
	}*/

	function login($email = null, $password = null){
		if(!empty($email) && !empty($password)) {
			$result = $this->instance->dm->login($email, $password);

			if($result){
				$user_session = array();
				foreach($result as $row){
					$user_session = array('id'=>$row->id, 'username'=>$row->username, 'email'=>$row->email, 'password'=>$row->password);
					
					$this->session->set_userdata('logged', $user_session);
				}
				redirect('app');
			}
			else{
				$this->errorCount = 1;
				redirect('dashboard');
			}		
		}
		else{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_loginConfirm');

			if($this->form_validation->run() == FALSE){
				//field validation failed so user redirected to login page	
				$data['error'] = "";

				if ($this->errorCount == 1) {
					$data['error'] = "Invalid Username or Password";	
				}			
				

				$this->load->view('template/_header');
				$this->load->view('dashboard/dashboard', $data);
				$this->load->view('template/_footer');		
			}

			else{		
				redirect('app');					
			}
		}		
	}	

	function loginConfirm(){
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$result = $this->instance->dm->login($email, sha1($password));
				
		if($result){
			$user_session = array();
			foreach($result as $row){
				$user_session = array('id'=>$row->id, 'username'=>$row->username, 'email'=>$row->email, 'password'=>$row->password);
				
				$this->session->set_userdata('logged', $user_session);
			}
			return TRUE;
		}
		else{
			$this->errorCount = 1;
			return false;
		}		
	}

	public function logout(){
		$this->session->unset_userdata('logged');
		session_destroy();
		redirect('dashboard');
	}	
}

/* End of file dahboard.php */
/* Location: ./application/controllers/dashboard.php */