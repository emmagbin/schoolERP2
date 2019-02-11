
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class ClassesController extends CI_Controller {
 
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
            $users['fullname'] = $session_data['fullname'];
            $users['email'] = $session_data['email'];
            $users['role'] = $session_data['role'];
            $users['status'] = $session_data['status'];
            $users['users_id'] = $session_data['users_id'];
            


                   $query= $this->db->query("   select
        (SELECT   school_id FROM school_info ) as school_id,
         (SELECT   school_name FROM school_info ) as school_name,
         (SELECT   school_postal_address FROM school_info ) as school_post,
           (SELECT   school_contact FROM school_info ) as school_contact,
         (SELECT   school_crest FROM school_info  ) as school_crest ");
        $results = $query->row();
        $users['school_id']=$results->school_id;
        $users['school_name']=$results->school_name;
        $users['school_post']=$results->school_post;
        $users['school_contact']=$results->school_contact;
         $users['school_crest']=$results->school_crest;
             

    
         $users['classes']=$this->all_classes();
         $query= $this->db->query(" SELECT   count(*)totalclasses FROM classes");
        $results = $query->row();
        $users['totalclasses']=$results->totalclasses;
              //  var_dump($users['classes']); die;
        
//         $users['active']='user';
//         $this->load->view('viewUsers',$users);
         $users['active']='classes';
         //$active='on';
         $this->load->view('viewClass',$users);
                }
        else
        {
        //If no session, redirect to login page
        redirect('login', 'refresh');
        }
   // $this->load->view('viewClass');
    // $this->load->view('viewUsers');


//        if($this->session->userdata('logged_in'))
//        {
//            $session_data = $this->session->userdata('logged_in');
//            $users['fullName'] = $session_data['fullName'];
//            $users['userEmail'] = $session_data['userEmail'];
//            $users['roleID'] = $session_data['roleID'];
//
//            $users['userMan'] = $session_data['userMan'];
//            $users['agents'] = $session_data['agents'];
//            $users['orgs'] = $session_data['orgs'];
//            $users['subs'] = $session_data['subs'];
//            $users['revReps'] = $session_data['revReps'];
//           
//
//
//
//              $users['users']=$this->all_users();
//              $users['roles']=$this->all_roles();   
//
//             // var_dump($users['roles']); die;
//
//               $query= $this->db->query(" select
//
//(SELECT   count(*) FROM userAccounts WHERE sex='Male' and accountStatus='A') as totalMales,
// 
// (SELECT   count(*) FROM userAccounts WHERE sex='Female' and accountStatus='A') as totalFemales,
//
// (SELECT   count(*) FROM userAccounts WHERE accountStatus='A') as totalActive,
//
// (SELECT   count(*) FROM userAccounts WHERE accountStatus='D' ) as totalNotActive ");
//        $results = $query->row();
//                    $users['totalMales']=$results->totalMales;
//                          $users['totalFemales']=$results->totalFemales;
//                                $users['totalActive']=$results->totalActive;
//                                      $users['totalNotActive']=$results->totalNotActive;
//
//          $this->load->view('users', $users);
//
//                }
//        else
//        {
//        //If no session, redirect to login page
//        redirect('login', 'refresh');
//        }


    }
    
    
         public function newClass()

    {
                    $data = array(
                        'class_name' =>$this->input->post('classname'),
                        'date_time' => date("Y-m-d"),
                    );
                   // var_dump($data); die;
                    $this->db->insert('classes', $data);
                    // $this->db->insert('classes', $data);
                    redirect('classes');

       
    }
    
    public function deleteClass()
    {
        $classid=$this->input->post('txtclassid');
         $this->db->where('class_id', $classid);
         $this->db->delete('classes');
        redirect('classes');
        
    }
    
    
     public function all_classes()
    {
        $query= $this->db->query("select * from classes ");
        $users= $query->result();
        return $users;
    }

    public function all_roles()
    {
        $query= $this->db->query("select rolename from roles ");
        $users= $query->result();
        return $users;
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


