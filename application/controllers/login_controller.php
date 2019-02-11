
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class login_controller extends CI_Controller {
 
public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		//$this->load->model('Service_Category_Model');
	 	}

public function index()
	{

		$this->load->view('login_view');

	}

function logout()
	{
		$idle=$this->input->post("idle");
		
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login', 'refresh');
	}
	

		
		
	
		



}

