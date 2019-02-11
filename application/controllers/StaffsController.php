
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class StaffsController extends CI_Controller {
 
public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            //$this->load->model('Service_Category_Model');
        }

public function index()
    {
   //  $class['active']='staff';
    //$active='on';
  
if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $users['fullname'] = $session_data['fullname'];
            $users['email'] = $session_data['email'];
            $users['role'] = $session_data['role'];
            $users['status'] = $session_data['status'];
            $users['users_id'] = $session_data['users_id'];
            
        //      $users['users']=$this->all_users();

        //  $query= $this->db->query(" select
        // (SELECT   count(*) FROM users WHERE gender='Male' and status='A') as totalMales,
        //  (SELECT   count(*) FROM users WHERE gender='Female' and status='A') as totalFemales,
        //  (SELECT   count(*) FROM users WHERE status='A') as totalActive,
        //  (SELECT   count(*) FROM users WHERE status='D' ) as totalNotActive ");
        // $results = $query->row();
        // $users['totalMales']=$results->totalMales;
        // $users['totalFemales']=$results->totalFemales;
        // $users['totalActive']=$results->totalActive;
        // $users['totalNotActive']=$results->totalNotActive;
         $users['active']='staff';
         $this->load->view('viewStaff',$users);
       //    $this->load->view('viewGuardian',$class);

                }
        else
        {
        //If no session, redirect to login page
        redirect('login', 'refresh');
        }



    
    

    }
    
     public function all_users()
    {
        $query= $this->db->query("select * from userAccounts ");
        $users= $query->result();
        return $users;
    }

    public function all_roles()
    {
        $query= $this->db->query("select rolename from roles ");
        $users= $query->result();
        return $users;
    }

     public function addUser()

    {



        $contact = $this->input->post('contact');
        $userEmail = $this->input->post('userEmail');
        $accountToken= $userEmail.$contact;

        $query= $this->db->query("select userEmail from userAccounts where  userEmail='$userEmail'");
        $userEmail= $query->num_rows();
        if($userEmail==1)
        {
            echo 0;
        }
        else
        {
                    $password=hash('sha512',$accountToken);
                    //var_dump($password); die;
                    $data = array(
                        'accountName' =>$this->input->post('fullname'),
                        'userEmail' => $this->input->post('userEmail'),
                        'accountToken' => $password,
                        'phoneNumber' => $this->input->post('contact'),
                        'roleID' => $this->input->post('role'),
                        'sex' => $this->input->post('gender'),
                        'CreatedOn' => date("Y-m-d"),
                        'accountStatus' =>'A',
                    );

                
                    //print_r($data); die;
                    $this->db->insert('userAccounts', $data);
                    redirect('user');

        }

//creating a user 
//check to see whether the email exist
//hash token ==email+contact then hash
   
    }




    public function editUser()
    {
        $userEmail=$this->input->post('email');
       $data = array(
            'accountName' =>$this->input->post('txtfullname'),
            'phoneNumber' => $this->input->post('txtphonenumber'),

            'roleID' => $this->input->post('txtrole'),
            'sex' => $this->input->post('txtgender'),
        );
      // var_dump($data); die;
        $this->db->set($data);
        $this->db->where('userEmail',$userEmail);
        $this->db->update("userAccounts",$data);
        redirect('user');
       //
    }

    


public   function unlock()
    {
        $userEmail=$this->input->post('txtidunlock');
        //var_dump($userEmail); die;
        $data=array(
            'accountStatus'=>'A'
        );
        $this->db->set($data);
        $this->db->where('userEmail',$userEmail);
        $this->db->update("userAccounts",$data);
        redirect('user');
    }

 public   function disable()
    {
        $userEmail=$this->input->post('disableid');
       // var_dump($userEmail); die;
        $data=array(
            'accountStatus'=>'D'
        );
        $this->db->set($data);
        $this->db->where('userEmail',$userEmail);
        $this->db->update("userAccounts",$data);
        redirect('user');
    }



    
    
   

public function change_password()
{
        $password=$this->input->post("password");
        $new_pass=$this->input->post("new_pass");
        $new_pass_confirm=$this->input->post("new_pass_confirm");
        $user_email=$this->input->post("user_email");


             $pass=hash('sha512',$password);  
        //var_dump($new_pass_confirm); die;
         $result=$this->valuserEmailate_old_password($pass,$user_email);
         //var_dump($result); die();
             if($result=='1')
               {
                            if($new_pass==$new_pass_confirm)
                        {

                                            $data = array('accountToken' => hash('sha512', $new_pass) );
                                            $this->db->set($data);
                                            $this->db->where('userEmail',$user_email);
                                           $this->db->update("userAccounts",$data);

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

//userEmail,accountToken
        public function valuserEmailate_old_password($pass,$user_email)
        {
            $query=$this->db->query("select accountToken from userAccounts where accountToken='$pass' and userEmail='$user_email' "); 
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


