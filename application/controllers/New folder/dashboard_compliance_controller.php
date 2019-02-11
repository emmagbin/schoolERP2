
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class dashboard_compliance_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $dashboard['user_full_name'] = $session_data['user_full_name'];
            $dashboard['email'] = $session_data['user_email'];
            $dashboard['password'] = $session_data['password'];
            $dashboard['user_role'] = $session_data['user_role'];


//            $cases['transaction_id']=$this->all_case_status();
//            $cases['total_cases']=$this->count_case_management();
            $dashboard['total_opened_cases']=$this->count_opened_cases();
            $dashboard['total_pending_cases']=$this->count_pending_cases();
            $this->load->view('dashboard_compliance',$dashboard);

        }
        else
        {

            redirect('login', 'refresh');
        }

    }


    public function count_opened_cases()
    {
        $query= $this->db->query("select count(*) as total_cases from case_description where CaseStatus='Opened Case'");
        $results= $query->row();
        $cases['total_cases']=$results->total_cases;
        return $cases['total_cases'];


    }

    public function count_pending_cases()
    {
        $query= $this->db->query("select count(*) as total_cases from case_description where CaseStatus='Pending'");
        $results= $query->row();
        $cases['total_cases']=$results->total_cases;
        return $cases['total_cases'];


    }

}

