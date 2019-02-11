
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class OrganisationUtilities extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('Service_Category_Model');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];


              $users['all_Business']=$this->all_Business();  

              $users['countBusinesses']=$this->countBusinesses();
            // var_dump($users['countBusinesses']); die;

                $users['roles']=$this->all_roles(); 

            $this->load->view('organizations',$users);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }



public function all_Business()
        {
            $query= $this->db->query("select * from orgs");
             $all_Business= $query->result();
        return $all_Business;
        }

 public function all_roles()
    {
        $query= $this->db->query("select rolename from roles ");
        $users= $query->result();
        return $users;
    }


        public function countBusinesses()
        {
            $query= $this->db->query("select count(*)'totalbusiness' from orgs ");
            $countBusinesses= $query->row();
            $users['totalbusiness']=$countBusinesses->totalbusiness;
            return $users['totalbusiness'];
        }


 public function editbusinnessinfo()
    {
        $adminemail=$this->input->post('txtadminemail');
        $organizationcode=$this->input->post('txtorganizationcode');
        
       $data = array(
            'adminfullname' =>$this->input->post('txtadminfullname'),
            'adminEmail' => $this->input->post('txtadminemail'),
            'adminContact' => $this->input->post('txtadmincontact'),
            'orgName' => $this->input->post('txtbname'),
            'orgType' =>$this->input->post('txtbtype'),
            'orgdigitalAddress' => $this->input->post('txtbdigitaladdress'),
            'orgcontact' => $this->input->post('txtbcontact'),
            'orgmail' => $this->input->post('txtbemail'),   
        );

        $this->db->set($data);
        $this->db->where('orgCode',$organizationcode);
        $this->db->update("orgs",$data);

         $datauser = array(
            'FName' =>$this->input->post('txtadminfullname'),
            'Phone' => $this->input->post('txtadmincontact'), 
        );

        $this->db->set($datauser);
        $this->db->where('userEmail',$adminemail);
        $this->db->update("orgUsers",$datauser);
        redirect('utilities');
    }

public   function unlock()
    {
        $id=$this->input->post('id');
        //var_dump($id); die;
        $data=array(
            'orgStatus'=>'A'
        );
        $this->db->set($data);
        $this->db->where('orgCode',$id);
        $this->db->update("orgs",$data);
        redirect('utilities');
    }

 public   function disable()
    {
        $id=$this->input->post('id');
        $data=array(
            'orgStatus'=>'D'
        );
        $this->db->set($data);
        $this->db->where('orgCode',$id);
        $this->db->update("orgs",$data);
        redirect('utilities');
    }




}

