
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class RoleManagementController extends CI_Controller {
 
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



                                      $users['all_roles']=$this->all_roles(); 

                                       $users['roles']=$this->roles(); 




                                        $query= $this->db->query(" select

(select count(distinct(roleName)) from roles) as totalroles,
 
 (select count(distinct(roleID)) from userAccounts where roleID!='Admin') as rolewithusers,

 (select count(distinct(roleName)) from roles where not exists (select roleID from userAccounts)) as freeRoles");
        $results = $query->row();
                    $users['totalroles']=$results->totalroles;
                          $users['rolewithusers']=$results->rolewithusers;
                                $users['freeRoles']=$results->freeRoles;
			

 
 		

		$this->load->view('roleManagement',$users);


		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}


	}

	 public function roles()
    {
        $query= $this->db->query("select rolename from roles ");
        $users= $query->result();
        return $users;
    }


     public function all_roles()
    {
        $query= $this->db->query("select * from roles ");
        $users= $query->result();
        return $users;
    }

    


	public function newrol()
		{
			//$email= $this->input->post('email');
			$data = array(
				
				'roleName' => $this->input->post('rolename'),
				'roleStatus' =>'A',
				'userMan' =>$this->input->post('User'),
				'agents' => $this->input->post('Collection'),
				'orgs' => $this->input->post('Organization'),
				'subs' =>$this->input->post('Subsdcribers'),
				'revReps' =>$this->input->post('Revenue'),
			 );
				//var_dump($data); die;
				 $this->db->insert('roles', $data);
				redirect('role');
				
		}



		public function deleteRole()
		{

			$id=$this->input->post('id');
			//var_dump($id); die;
			$this->db->WHERE('roleID',$id);
			$this->db->delete("roles");
					redirect('role');
		}


}

