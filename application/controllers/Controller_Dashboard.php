<?php defined('BASEPATH') OR exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class Controller_Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function dashboard()
    {

        if($this->session->userdata('logged_in'))
            {
                $session_data = $this->session->userdata('logged_in');
                $users['fullname'] = $session_data['fullname'];
                $users['Email'] = $session_data['Email'];
                $users['Privilages'] = $session_data['Privilages'];
                $users['StatusInd'] = $session_data['StatusInd'];
                $users['FirstLogin'] = $session_data['FirstLogin'];
               // $this->load->view('viewDashboard');
            $this->load->view('viewDashboard',$users);
            }
            else
            {
            redirect('login', 'refresh');
            }
            

            


    }


   
}

