
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataUtilitiesController extends CI_Controller {
 
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
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];

             //$users['users']=$this->all_users(); 
             
               $query= $this->db->query(" select

(SELECT   count(*) FROM Agents WHERE Sex='Male' and accountStatus='A') as totalMales,
 
 (SELECT   count(*) FROM Agents WHERE Sex='Female' and accountStatus='A') as totalFemales,

 (SELECT   count(*) FROM Agents WHERE accountStatus='A') as totalActive,

 (SELECT   count(*) FROM Agents WHERE accountStatus='D' ) as totalNotActive ");
        $results = $query->row();
                    $users['totalMales']=$results->totalMales;
                          $users['totalFemales']=$results->totalFemales;
                                $users['totalActive']=$results->totalActive;
                                      $users['totalNotActive']=$results->totalNotActive;

                                       $users['all_Agents']=$this->all_Agents(); 
                                        $users['roles']=$this->all_roles(); 



			$this->load->view('dataUtilities',$users);
	     }

	}


 public function all_roles()
    {
        $query= $this->db->query("select rolename from roles ");
        $users= $query->result();
        return $users;
    }


 public function all_Agents()
    {
        $query= $this->db->query("select * from Agents ");
        $users= $query->result();
        return $users;
    }

	function addAgent()
	{

$mycode=rand(1000,9999);
$myphonenumber=$this->input->post('Agentcontact');
$accountTokenValues=$myphonenumber.$mycode;

$accountToken=hash('sha512',$accountTokenValues);
        $query= $this->db->query("select agentPhoneNumber from Agents where  agentPhoneNumber='$myphonenumber'");
        $acountPhoneNumber= $query->num_rows();
        if($acountPhoneNumber==1)
        {

            echo 'exist';
        }
        else
        {
             $data = array(
                'agentEmail' =>$this->input->post('agentEmail'),
                'accountName' =>$this->input->post('Agentname'),
                'Sex' => $this->input->post('Agnetsex'),
                'agentPhoneNumber' => $this->input->post('Agentcontact'),
                'accountToken' => $accountToken,  
                'accountStatus' => 'A',
                'CreatedOn' => date("Y-m-d"),
               // 'CreatedBy' =>  $this->input->post('regby'),
                
                );

               $this->db->insert('Agents', $data);

               ////////////////////////////////////////////////////////  successfully.
               $smsString = substr($myphonenumber, 1, 9);
                $smsString = '233' . $smsString;
                $message = 'You have been registered as an mInsurance Collection Agent successfully. Your PIN is ' . $mycode . '.';
                // send SMS
                $url = "https://api.nalosolutions.com/bulksms/?username=ite&password=ITE@tech&type=0&dlr=1&destination=$smsString&source=mInsurance&message=" . urlencode($message) . "";

                //send message
                $response = file_get_contents($url);

                ///////////////////////////////////////////////////////////////////
               echo 1;

                //redirect('data');

        }
	}

function agentBalance()
{
    $mysuspenseNo=$this->input->post('suspenseAccountNumber');

    $query= $this->db->query("select balance as balance from agentAccounts where agentSuspenseAcc='$mysuspenseNo' ");
        $results = $query->row();
       $balance=$results->balance;
       echo $balance;


}
    public function cashin()
    {

      /*  [accountNUmber] [varchar](13) NOT NULL,
    [amount] [decimal](18, 2) NOT NULL,
    [transactionMode] [varchar](3) NOT NULL,
    [creditDebitInd] [varchar](1) NOT NULL,
    [cashInOn] [date] NULL,
    [refID] [varchar](100) NOT NULL,
    [transactionCallID] [varchar](8) NOT NULL
*/
if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];
            $query= $this->db->query(" select
(SELECT   count(*) FROM Agents WHERE Sex='Male' and accountStatus='A') as totalMales,
 (SELECT   count(*) FROM Agents WHERE Sex='Female' and accountStatus='A') as totalFemales,
 (SELECT   count(*) FROM Agents WHERE accountStatus='A') as totalActive,
 (SELECT   count(*) FROM Agents WHERE accountStatus='D' ) as totalNotActive ");
        $results = $query->row();
                    $users['totalMales']=$results->totalMales;
                          $users['totalFemales']=$results->totalFemales;
                                $users['totalActive']=$results->totalActive;
                                      $users['totalNotActive']=$results->totalNotActive;
                                            $users['all_Agents']=$this->all_Agents(); 
                                                  $users['roles']=$this->all_roles(); 



            $this->load->view('cashin',$users);
         }
    }


public function phonenumbersearch()
{

    $phonenumber=$this->input->post('phonenumber'); 
  //var_dump($phonenumber); die;
 $query= $this->db->query(" select
(SELECT   accountName FROM Agents WHERE agentPhoneNumber='$phonenumber') as accountName,
 (SELECT   suspenseAccountNumber FROM Agents WHERE agentPhoneNumber='$phonenumber' ) as suspenseAccountNumber,
 (SELECT   balance FROM agentAccounts WHERE agentSuspenseAcc=(select suspenseAccountNumber from agents where
  agentPhoneNumber='$phonenumber')) as balance");
        $results = $query->row();
        //var_dump($results); die;
                    $accountName=$results->accountName;
                          $suspenseAccountNumber=$results->suspenseAccountNumber;
                                $balance=$results->balance;
                    $begin='1';          
            $fullstring=$begin."|". $suspenseAccountNumber ."|".$balance ."|".$accountName."|".$result_row;
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

EXEC  @return_value = [dbo].[spAgentColl]
    @accountToken = N'$accountToken',
    @agPhoneNumber = N'$phonenumber',
    @amount = N'$amount',
    @anString = @anString OUTPUT

SELECT  @anString as N'@anString'

SELECT  'Return Value' = @return_value
 ")->result_array();

         // print_r($accountToken);
$query1= $this->db->query(" 
 select authCode'authCode' from agCash where 
 accountToken='$accountToken'  ");
        $results1 = $query1->row();
        $authCode=$results1->authCode;
        if($authCode=='Y')
        {
          echo 1;

        }
        else{
          echo 0;
        }

       // echo $authCode;
      

      //  redirect('cashin');


}
	


 public function editAgent()
    {
        $id=$this->input->post('txtidedit');
       $data = array(
            'accountName' =>$this->input->post('txtAgfullName'),
            'agentPhoneNumber' => $this->input->post('txtAgPhoneNumber'),
             'Sex' => $this->input->post('txtAggender'),
        );
      // var_dump($data); die;
        $this->db->set($data);
        $this->db->where('agentEmail',$id);
        $this->db->update("Agents",$data);
        redirect('data');
    }

public   function unlock()
    {
        $id=$this->input->post('id');
       // var_dump($id); die;
        $data=array(
            'accountStatus'=>'A'
        );
        $this->db->set($data);
        $this->db->where('agentEmail',$id);
        $this->db->update("Agents",$data);
        redirect('data');
    }

 public   function DisableAgent()
    {
        $id=$this->input->post('DisableAgentid');
        $data=array(
            'accountStatus'=>'D'
        );
      // var_dump($data); die;
        $this->db->set($data);
        $this->db->where('agentEmail',$id);
        $this->db->update("Agents",$data);
        redirect('data');
    }









	


















// CHANGING OF PASSWORD
    public function change_password()
{
		$password=$this->input->post("password");
		$new_pass=$this->input->post("new_pass");
		$new_pass_confirm=$this->input->post("new_pass_confirm");
		$user_email=$this->input->post("user_email");

		     $pass=hash('sha512',$password);  
        //var_dump($user_email); die;
         $result=$this->validate_old_password($pass,$user_email);
		 //var_dump($result); die();
             if($result=='1')
               {
		               		if($new_pass==$new_pass_confirm)
				        {

				        					$data = array('password' => hash('sha512', $new_pass) );
											$this->db->set($data);
									        $this->db->where('user_email',$user_email);
									       $this->db->update("users",$data);

				        	echo $result;
				        }
				        else
				        {
				                //return 2;
				                $result=2;
				               	echo $result;
				        }
               }
               else{ 
		        	echo $result;
                }

	
}
	
		//PASSWORD VALIDATION
		public function validate_old_password($pass,$user_email)
		{
		    $query=$this->db->query("select password from users where password='$pass' and user_email='$user_email' "); 
		           $result=$query->num_rows();
		        if($result >=1)
		        {
		                return 1;
		        }
		        else
		        {
		                return 0;
		        }
		}

}

