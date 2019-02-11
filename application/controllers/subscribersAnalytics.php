
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 //class VerifyLogin extends CI_Controller {

   // function __construct()
   // {}
//This is the Controller for codeigniter crud using ajax application.
class subscribersAnalytics extends CI_Controller{
 
public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		//$this->load->model('Service_Category_Model');
	 	}

public function suscribers()
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



                                //EXECUTE STORED PROCEDURE
				 $result =$this->db->query("
				DECLARE	@return_value int,
						@anString varchar(max)
				EXEC	@return_value = [dbo].[spSubscribers]
						@anString = @anString OUTPUT
				SELECT	@anString as N'@anString' ")->result_array();

				// var_dump($result); die;



			   foreach($result as $s)
			   {
			    $values= $s['@anString'];
				}


   $splitteddata=explode("|",$values);

   //total subscribers
   $users['totalsubscriber']= $splitteddata[0];
   //subscriber with or without cards
   $users['subscriberActive']= $splitteddata[1];
   $users['subscriberDisabled']= $splitteddata[2];
   //graph
   $users['subscriberActivePercentage']= $splitteddata[3];
   $users['subscriberDisabledPercentage']= $splitteddata[4];
   $users['SubAMTN']= $splitteddata[5];
   $users['SubDMTN']= $splitteddata[6];
   $users['SubAVoda']= $splitteddata[7];
   $users['SubDVoda']= $splitteddata[8];
   $users['SubAAT']= $splitteddata[9];
   $users['SubDAT']= $splitteddata[10];
   $users['SubAGlo']= $splitteddata[11];
   $users['SubDGlo']= $splitteddata[12];
   $users['SubS']= $splitteddata[13];
   $users['SubO']= $splitteddata[14];
   $users['SubAg']= $splitteddata[14];
   //var_dump($users['subscriberDisabled']);die;

	$this->load->view('suscribersData',$users);


		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}


	}


	public function ministatement()
	{

		if($this->session->userdata('logged_in'))
		{
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];



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
       // var_dump($result); die;
        echo json_encode($result);
        //return $users;
       


			
		}
function SubBalance(){

	//suspenseaccountnumber;
	$phonenumber=$this->input->post('suspenseaccountnumber');
	//var_dump($suspenseaccountnumber); die;

   $query= $this->db->query(" select
 (select balance from subAccounts where subAccountNUmber=
(select suspenseAccountNumber from subscribers where phonenumber='$phonenumber') ) as acbalance,
  (SELECT   balance FROM subBonus WHERE subAccountNUmber=(select suspenseAccountNumber from subscribers where
  phonenumber='$phonenumber')) as bobalance");
        $results = $query->row();
        //var_dump($results); die;
                  
                     $acbalance=$results->acbalance;
                     $bobalance=$results->bobalance; 
                    $begin='1';          
 
        if($results=="")
        {
        	echo('N/A');
        }
       else
       {
         $fullstring=$begin."|".$acbalance ."|".$bobalance."|".$result_row;
            //var_dump($fullstring); die;
              echo json_encode($fullstring);
		}
 }


    




     public function registerSuscriber()
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



                                

	$this->load->view('subscriberRegistration',$users);


		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}


	}  


	function addSubscriber()
	{

$mycode=rand(1000,9999);
//ucwords("hello world");
$fullname=ucwords($this->input->post('fullname'));

$phonenumber=$this->input->post('phonenumber');

$pin=$phonenumber.$mycode;
$mypin=hash('sha512',$pin);

$monthCover=$this->input->post('monthYear');
$mymonthCover= date('m',strtotime($monthCover));

$yearCover=$this->input->post('monthYear');
$myyearCover= date('Y',strtotime($yearCover));


$monthRenew=$this->input->post('monthYear');
$mymonthRenew= date('m',strtotime($monthRenew));

$yearRenew=$this->input->post('monthYear');
$myyearRenew= date('Y',strtotime($yearRenew))+1;

        $query= $this->db->query("select phonenumber from subscribers where  phonenumber='$phonenumber'");
        $acountPhoneNumber= $query->num_rows();
        if($acountPhoneNumber==1)
        {

            echo 'exist';
        }
        else
        {

             $data = array(
                'fullname' =>$this->input->post('fullname'),
                'phonenumber' =>$phonenumber,
                'gender' => $this->input->post('gender'),
                'dateSubscribed' => date("Y-m-d"),
                'network' =>  $this->input->post('network'),
                'pin' => $mypin,
                'regStatus' => 'A',
                 'subType' =>'CCR',
                'prefInsurance' =>$this->input->post('InsuranceType'),
                'monthCover' => $mymonthCover,
                'yearCover' => $myyearCover,
                'monthRenew' => $mymonthRenew,
                'yearRenew' => $myyearRenew,

                'vehicle' => $this->input->post('ownVehicle'),                
                );
             	//echo json_encode($data); die;
             
               $this->db->insert('subscribers', $data);


                              ////////////////////////////////////////////////////////  successfully.
               $smsString = substr($phonenumber, 1, 9);
                $smsString = '233' . $smsString;
                $message = 'Hello '.$fullname.', your mInsurance account has been opened successfully. Your PIN is ' . $mycode . '. Thank You. ';
                // send SMS
                $url = "https://api.nalosolutions.com/bulksms/?username=ite&password=ITE@tech&type=0&dlr=1&destination=$smsString&source=mInsurance&message=" . urlencode($message) . "";

                //send message
                $response = file_get_contents($url);


               echo 1;
        }

	}
		
     


      public function suscriberCashin()
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



                                

  $this->load->view('subscriberCashin',$users);


    }
    else
    {
    //If no session, redirect to login page
    redirect('login', 'refresh');
    }


  }  
  public function phonenumbersearch()
{

    $phonenumber=$this->input->post('phonenumber'); 
  //var_dump($phonenumber); die;
 $query= $this->db->query(" select
(SELECT   fullname FROM subscribers WHERE phonenumber='$phonenumber') as accountName,
 (SELECT   suspenseAccountNumber FROM subscribers WHERE phonenumber='$phonenumber' ) as suspenseAccountNumber,
 (SELECT   balance FROM subAccounts WHERE subAccountNUmber=(select suspenseAccountNumber from subscribers where
  phonenumber='$phonenumber')) as acbalance,
  (SELECT   balance FROM subBonus WHERE subAccountNUmber=(select suspenseAccountNumber from subscribers where
  phonenumber='$phonenumber')) as bobalance");
        $results = $query->row();
        //var_dump($results); die;
                    $accountName=$results->accountName;
                     $suspenseAccountNumber=$results->suspenseAccountNumber;
                     $acbalance=$results->acbalance;
                     $bobalance=$results->bobalance; 
                    $begin='1';          
            $fullstring=$begin."|". $suspenseAccountNumber ."|".$acbalance ."|".$bobalance."|".$accountName."|".$result_row;
            //var_dump($fullstring); die;
              echo json_encode($fullstring);


}

function payInCash()
{
//$myrefid=rand(1000,999999999);
//$accountToken=$this->input->post('accountToken');
$phonenumber=$this->input->post('phonenumber');
$amount=$this->input->post('amount'); 
$userEmail=$this->input->post('userEmail');  
//var_dump($amount); die;

$query= $this->db->query("select accountToken'accountToken'  from userAccounts where userEmail='$userEmail'");
        $results = $query->row();
        $accountToken=$results->accountToken;
       // var_dump($accountToken); die;
       

        //EXECUTE STORED PROCEDURE
                 $result =$this->db->query("
DECLARE @return_value int,
    @anString varchar(max)

EXEC  @return_value = [dbo].[spBonus]
    @accountToken = N'$accountToken',
    @subPhoneNumber = N'$phonenumber',
    @amount = N'$amount',
    @anString = @anString OUTPUT

SELECT  @anString as N'@anString'

SELECT  'Return Value' = @return_value
 ")->result_array();

         // print_r($accountToken);
$query1= $this->db->query(" 
 select authCode'authCode' from tempCash where 
 accountToken='$accountToken'  ");
        $results1 = $query1->row();
        $authCode=$results1->authCode;

        //echo json_encode($authCode); die;
        if($authCode=='Y')
        {
          echo 1;

        }
        else{
          echo 0;
        }
}

}



