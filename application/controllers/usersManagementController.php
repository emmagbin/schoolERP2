
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class UsersManagementController extends CI_Controller {
 
public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            //$this->load->model('Service_Category_Model');
        }

public function index()
    {
    
    // $this->load->view('viewUsers');


        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $users['fullname'] = $session_data['fullname'];
            $users['email'] = $session_data['email'];
            $users['role'] = $session_data['role'];
            $users['status'] = $session_data['status'];
            $users['users_id'] = $session_data['users_id'];
            
             $users['users']=$this->all_users();
             $users['classes']=$this->all_classes();

         $query= $this->db->query(" select
        (SELECT   count(*) FROM users WHERE gender='Male' and status='A') as totalMales,
         (SELECT   count(*) FROM users WHERE gender='Female' and status='A') as totalFemales,
         (SELECT   count(*) FROM users WHERE status='A') as totalActive,
         (SELECT   count(*) FROM users WHERE status='D' ) as totalNotActive ");
        $results = $query->row();
        $users['totalMales']=$results->totalMales;
        $users['totalFemales']=$results->totalFemales;
        $users['totalActive']=$results->totalActive;
        $users['totalNotActive']=$results->totalNotActive;



             $query= $this->db->query("select
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






         $users['active']='user';
         $this->load->view('viewUsers',$users);

                }
        else
        {
        //If no session, redirect to login page
        redirect('login', 'refresh');
        }
    }

    public function schoolsettings()
    {
            $school_id = $this->input->post('school_id');
             $school_crest = $this->input->post('school_crest');
                 $oldschoolcrest = $this->input->post('oldschoolcrest');
                  $activeunderschool = $this->input->post('activeunderschool');
             
           // var_dump($oldschoolcrest); die;

            if($school_id=="")
            {

                             //Check whether user upload picture
                        if(!empty($_FILES['schoolsettings']['name'])){

                                $config['upload_path'] = 'uploads/schoolsettings/';
                                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                $config['file_name'] = $_FILES['schoolsettings']['name'];
                                
                                //Load upload library and initialize configuration
                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);
                                
                                if($this->upload->do_upload('schoolsettings'))
                                {
                                    $uploadData = $this->upload->data();
                                    $pictureschoolsettings = $uploadData['file_name'];
                                }
                                else
                                {
                                    $pictureschoolsettings = '';
                                }
                            }
                         else{
                                $pictureschoolsettings = '';
                            }


                  $data = array(
                        'school_name' =>$this->input->post('school_name'),
                        'school_postal_address' => $this->input->post('school_post'),
                        'school_contact' => $this->input->post('school_contact'),
                        'school_crest' =>'uploads/schoolsettings/'.$pictureschoolsettings,
                       
                    );
                   // var_dump($data); die; //'uploads/schoolsettings/'.$final_crest,
                    $this->db->insert('school_info', $data);


                    
            }
            else
            {
                   
                             //Check whether user upload picture
                        if(!empty($_FILES['schoolsettings']['name'])){

                                $config['upload_path'] = 'uploads/schoolsettings/';
                                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                $config['file_name'] = $_FILES['schoolsettings']['name'];
                                
                                //Load upload library and initialize configuration
                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);
                                
                                if($this->upload->do_upload('schoolsettings'))
                                {
                                    $uploadData = $this->upload->data();
                                    $pictureschoolsettings = $uploadData['file_name'];
                                }
                                else
                                {
                                    $pictureschoolsettings = '';
                                }
                            }
                         else{
                                $pictureschoolsettings = '';
                            }





                        if($pictureschoolsettings=="")
                    {
                            $final_crest=$oldschoolcrest;
                    }
                    else{

                        $final_crest='uploads/schoolsettings/'.$pictureschoolsettings;
                      }

                 $data = array(
                        'school_name' =>$this->input->post('school_name'),
                        'school_postal_address' => $this->input->post('school_post'),
                        'school_contact' => $this->input->post('school_contact'),
                        'school_crest' => $final_crest,
                       
                    );
               //  var_dump($data); die;
//$final_crest
                        $this->db->set($data);
                        $this->db->where('school_id',$school_id);
                        $this->db->update("school_info",$data);
                        //redirect('user');

                    

            }
           
                redirect($activeunderschool);

    }
// school_id int,
//     school_name nvarchar(200),
//     school_postal_address nvarchar(200),
//     school_contact nvarchar(20),
    
    //  public function school_info()
    // {
    //     $query= $this->db->query("select * from school_info ");
    //     $school_info= $query->result();
    //     return $school_info;
    // }

     public function all_users()
    {
        $query= $this->db->query("select * from users ");
        $users= $query->result();
        return $users;
    }

    public function all_roles()
    {
        $query= $this->db->query("select rolename from roles ");
        $users= $query->result();
        return $users;
    }      
      public function all_classes()
    {
        $query= $this->db->query("select * from classes");
        $classes= $query->result();
        return $classes;
    }
          
     public function addUser()

    {
        $userEmail = $this->input->post('email');
        $contact = $this->input->post('phone');
        $accountToken= $userEmail.$contact;
        $password=hash('sha512',$accountToken);
       // var_dump($password); die;

        $query= $this->db->query("select email from users where  email='$userEmail'");
        $userEmail= $query->num_rows();
        if($userEmail==1)
        {
            echo 0;
        }
        else
        {
                   //var_dump($password); die;
                    $data = array(
                        'fullname' =>$this->input->post('fullname'),
                        'email' => $this->input->post('email'),
                        'password' => $password,
                        'phone' => $this->input->post('phone'),
                        'role' => $this->input->post('role'),
                        'gender' => $this->input->post('gender'),
                        'created_date' => date("Y-m-d"),
                        'status' =>'A',
                    );
                  //  var_dump($data); die;
                    $this->db->insert('users', $data);
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
            'fullname' =>$this->input->post('fullname'),
            'phone' => $this->input->post('phone'),

            'role' => $this->input->post('role'),
            'gender' => $this->input->post('gender'),
        );
    //  var_dump($userEmail); die;
        $this->db->set($data);
        $this->db->where('email',$userEmail);
        $this->db->update("users",$data);
        redirect('user');
       //
    }

    


public   function unlock()
    {
         $userEmail=$this->input->post('user_id');
        $data=array(
            'status'=>'A'
        );
        $this->db->set($data);
        $this->db->where('email',$userEmail);
        $this->db->update("users",$data);
        redirect('user');
    }

 public   function disable()
    {
        $userEmail=$this->input->post('user_id');
        $data=array(
            'status'=>'D'
        );
        $this->db->set($data);
        $this->db->where('email',$userEmail);
        $this->db->update("users",$data);
        redirect('user');
    }
    
     public   function deleteUser()
    {
         $userEmail=$this->input->post('user_id');
         $this->db->where('email', $userEmail);
         $this->db->delete('users');
        redirect('user');
    }



    
    
   

public function change_password()
{
    
   
    
        $password=$this->input->post("password");
        // $result=$this->valuserEmailate_old_password($pass,$user_email);
        $new_pass=$this->input->post("new_pass");
        $new_pass_confirm=$this->input->post("new_pass_confirm");
        $user_email=$this->input->post("user_email");

            $passwordToken=$user_email.$password;
             $pass=hash('sha512',$passwordToken);  
       // var_dump($new_pass_confirm); die;


        // $userEmail = $this->input->post('email');
        // $contact = $this->input->post('phone');
        // $accountToken= $userEmail.$contact;
        // $password=hash('sha512',$accountToken);




         $result=$this->valuserEmailate_old_password($pass,$user_email);
         //var_dump($result); die();
             if($result=='1')
               {
                            if($new_pass==$new_pass_confirm)
                        {
                                            $newpasswordToken=$user_email.$new_pass;
                                            $data = array('password' => hash('sha512', $newpasswordToken) );
                                            $this->db->set($data);
                                            $this->db->where('email',$user_email);
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

//userEmail,accountToken
        public function valuserEmailate_old_password($pass,$user_email)
        {
            $query=$this->db->query("select password from users where password='$pass' and email='$user_email' "); 
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


