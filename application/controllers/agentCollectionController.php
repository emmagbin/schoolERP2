
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class agentCollectionController extends CI_Controller {
 
public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		//$this->load->model('Service_Category_Model');
	 	}

public function agentcollection()
	{

		if($this->session->userdata('logged_in'))
		{
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];
            $users['all_roles']=$this->all_roles(); 
            $users['roles']=$this->roles(); 

            $users['agents']=$this->allagents(); 
            //var_dump($users['agents']); die;

            
	        $this->load->view('agentCollection',$users);
		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}


	}


			public function agentscollectionreport()
		{

			$datefrom=$this->input->post('datefrom');
			$dateto=$this->input->post('dateto');
			$agentname=$this->input->post('agentname');  
			$userEmail=$this->input->post('userEmail');  

			//var_dump($agentname); die;
			

			$query= $this->db->query("select accountToken'accountToken'  from userAccounts where userEmail='$userEmail'");
        $results = $query->row();
        $accountToken=$results->accountToken;
       // echo('hi'); die;




			if($agentname=="ALL")
			{

$query= $this->db->query("select a.accountName, sum(s.amount) as MoneyCollected, count(s.refID) as NoOfCashIns from subAccountsTransactions s, agents a 
  where s.accountNUmber = a.suspenseAccountNumber and
  transactionOn between '$datefrom' and '$dateto' group by a.accountName");
     $results = $query->result();
        echo json_encode($results);
        
			}
			else
			{
					//echo('no'); die;
		$query= $this->db->query("select suspenseAccountNumber'suspenseAccountNumber'  from Agents where accountName='$agentname'");
        $results = $query->row();
        $suspenseAccountNumber=$results->suspenseAccountNumber;
       $query= $this->db->query("
  insert into collectionsearch 
  SELECT s.transactionOn, s.transactionTime, a.accountName,  (@accountToken), s.amount, s.refID from subAccountsTransactions s, agents a 
  where s.accountNUmber =  $suspenseAccountNumber and
   s.accountNUmber = a.suspenseAccountNumber and 
  transactionOn between $datefrom and $dateto ");
        $result= $query->result_array();
        echo json_encode($result);



  //       select @suspense = suspenseAccountNumber from agents where accountName = @cri
  // insert into collectionsearch 
  // SELECT s.transactionOn, s.transactionTime, a.accountName,  (@accountToken), s.amount, s.refID from subAccountsTransactions s, agents a 
  // where s.accountNUmber = @suspense and
  //  s.accountNUmber = a.suspenseAccountNumber and 
  // transactionOn between @datef and @datet



			}



    }


////CALLING WEBSERVICE
// $fullstring=file_get_contents("http://184.168.147.165:81/bankmoneycustomersupportApi/index.php?trans_id='$transaction_id'"); 

//var_dump($fullstring); die;
//echo $fullstring; die;




	public function organisationcollection()
	{

		if($this->session->userdata('logged_in'))
		{
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];
            $users['all_roles']=$this->all_roles(); 
            $users['roles']=$this->roles(); 
	        $this->load->view('organisationcollecton',$users);
		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}


	}


	public function mobilemoneycollection()
	{

		if($this->session->userdata('logged_in'))
		{
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];
            $users['all_roles']=$this->all_roles(); 
            $users['roles']=$this->roles(); 
	        $this->load->view('mobilemoneycollection',$users);
		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}


	}


	public function cashout()
	{

		if($this->session->userdata('logged_in'))
		{
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];
            $users['all_roles']=$this->all_roles(); 
            $users['roles']=$this->roles(); 
	        $this->load->view('cashout',$users);
		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}


	}


	 public function allagents()
    {
        $query= $this->db->query("select suspenseAccountNumber,accountName from agents");
        $allagents= $query->result();
        return $allagents;
    }

































	public function ministatement()
	{

		if($this->session->userdata('logged_in'))
		{
			 $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['userRole'] = $session_data['userRole'];



                                      $users['all_roles']=$this->all_roles(); 

                                       $users['roles']=$this->roles(); 




 $query= $this->db->query(" select (select count(distinct(roleName)) from roles) as totalroles,
 
 (select count(distinct(roleID)) from userAccounts where roleID!='Admin') as rolewithusers,

 (select count(distinct(roleName)) from roles where not exists (select roleID from userAccounts)) as freeRoles");
        $results = $query->row();
                    $users['totalroles']=$results->totalroles;
                          $users['rolewithusers']=$results->rolewithusers;
                                $users['freeRoles']=$results->freeRoles;
			

 
 		

		$this->load->view('miniStatement',$users);


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

			public function generaeministatement()
		{

			$datefrom=$this->input->post('datefrom');
			$dateto=$this->input->post('dateto');
			$phonenumber=$this->input->post('Subscribernumber');
			 ////var_dump($phonenumber); die;

			$query= $this->db->query("select * from subAccountsTransactions where accountNUmber=
  (select suspenseAccountNumber from subscribers where phonenumber='$phonenumber') and transactionOn between '$datefrom' and '$dateto'   and creditDebitInd='C' ");
        $result= $query->result_array();
        echo json_encode($result);
        //return $users;
       


			
		}
function SubBalance(){

	//suspenseaccountnumber;
	$phonenumber=$this->input->post('suspenseaccountnumber');
	//var_dump($suspenseaccountnumber); die;

    $query= $this->db->query(" select balance from subAccounts where subAccountNUmber=
(select suspenseAccountNumber from subscribers where phonenumber='$phonenumber') ");
        $results = $query->row();
        //var_dump($results); die;
        if($results=="")
        {
        	echo('N/A');
        }
      
       
       else
       {
       	 $balance=$results->balance;
       	echo $balance;
		}
 }
       
		


}

