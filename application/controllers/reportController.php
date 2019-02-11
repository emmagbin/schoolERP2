
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class reportController extends CI_Controller {
 
public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            //$this->load->model('Service_Category_Model');
        }

public function dropoff()
    {
        $this->load->view('viewDropOff');
    //     if($this->session->userdata('logged_in'))
    //     {
    //         $session_data = $this->session->userdata('logged_in');
    //         $users['fullname'] = $session_data['fullname'];
    //         $users['email'] = $session_data['email'];
    //         $users['role'] = $session_data['role'];
    //         $users['status'] = $session_data['status'];
    //         $users['users_id'] = $session_data['users_id'];
            
    //          $users['users']=$this->all_users();
    //          $users['classes']=$this->all_classes();
    //           $users['dropOff']=$this->today_dropOff();


    //                  $query= $this->db->query("   select
    //     (SELECT   school_id FROM school_info ) as school_id,
    //      (SELECT   school_name FROM school_info ) as school_name,
    //      (SELECT   school_postal_address FROM school_info ) as school_post,
    //        (SELECT   school_contact FROM school_info ) as school_contact,
    //      (SELECT   school_crest FROM school_info  ) as school_crest ");
    //     $results = $query->row();
    //    $users['school_id']=$results->school_id;
    //     $users['school_name']=$results->school_name;
    //     $users['school_post']=$results->school_post;
    //     $users['school_contact']=$results->school_contact;
    //      $users['school_crest']=$results->school_crest;


    //      $users['active']='dropoff';
    //       $users['reportdate']='DROP OFF REPORT FOR ' .date('Y-m-d');
    //     // $this->load->view('viewPickup',$users);
    //      $this->load->view('viewDropOff',$users);

    //             }
    //     else
    //     {
    //     //If no session, redirect to login page
    //     redirect('login', 'refresh');
    //     }


    }
    

    public function pickup()
    {
    
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
              $users['pickups']=$this->today_pickups();

             // $users['pickups']=$this->today_pickups();
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
             // var_dump($users['pickups']); die;

         $users['active']='pickup';

         $users['reportdate']='PICKUPS REPORT FOR ' .date('Y-m-d');
         $this->load->view('viewPickup',$users);

                }
        else
        {
        //If no session, redirect to login page
        redirect('login', 'refresh');
        }


    }
      

        public function range_summary()
    {
         $start_date=$this->input->post('from_date');
        $end_date=$this->input->post('to_date');
         $query = $this->db->query(" select (pickers.fullname)'picker',(kid.kid_fullname)'kid',dropOff_date'date',CONVERT(VARCHAR(10), 
      dropOff_time, 108)'time', (users.fullname)'receiver'
      from picker_R_kid inner join kid on picker_R_kid.kid_id=kid.kid_id
      inner join pickers on pickers.picker_id=picker_R_kid.dropOffpicker_id
      inner join dropOff on dropOff.picker_R_kid_id=picker_R_kid.picker_R_kid_id
      inner join users on users.users_id=picker_R_kid.users_id
      where dropOff_date between '$start_date' and '$end_date' ");
         $dropoffs = $query->result();
        echo json_encode($dropoffs);
    }



    public function range_summary_for_printing()
    {
        //$defaut=$this->input->post('start_date');

        $start_date=$this->input->post('from_date');
        $end_date=$this->input->post('to_date');

        //var_dump($start_date);die;
        $query = $this->db->query("select (pickers.fullname)'picker',(kid.kid_fullname)'kid',dropOff_date'date',CONVERT(VARCHAR(10), 
      dropOff_time, 108)'time', (users.fullname)'receiver'
      from picker_R_kid inner join kid on picker_R_kid.kid_id=kid.kid_id
      inner join pickers on pickers.picker_id=picker_R_kid.dropOffpicker_id
      inner join dropOff on dropOff.picker_R_kid_id=picker_R_kid.picker_R_kid_id
      inner join users on users.users_id=picker_R_kid.users_id
      where dropOff_date between '$start_date' and '$end_date'");
        $weekly_summary = $query->result();

        $output = '';
        $output .=
            '<table class="table table-bordered">
                         <tr>
                                                          <th>DATE</th>
                                                            <th>TIME</th>
                                                            <th>KIDS NAME</th>
                                                            <th>DROP OFFS NAME</th>
                                                             <th>KIDS RECEIVERS NAME</th>
                                    
                                   
                                </tr>
                            </thead>
                            ';

        //get count
        $result=$query->num_rows();
        //echo $result;
        if($result > 0)
        {
            //echo "heoll";
            foreach($weekly_summary as $record)
            {
                //var_dump($record);die;
                $output .= ' <tr>
                          <td>'. $record->date .'</td>
                          <td>'. $record->time .'</td>
                          <td>'. $record->kid .'</td>
                          <td>'. $record->picker .'</td>
                          <td>'. $record->receiver .'</td>
                          
                      
                          
                     </tr>
               ';
            }
        }
        else
        {
            $output .= '
                <tr>
                     <td colspan="5">No Order Found</td>
                </tr>
           ';
        }

        $output .= '</table>';
        //var_dump($output); die;
        echo $output;
        //echo $weekly_summary;
    }




 public function range_summarypickups()
    {
         $start_date=$this->input->post('from_date');
        $end_date=$this->input->post('to_date');
         $query = $this->db->query(" select (pickers.fullname)'picker',(kid.kid_fullname)'kid',pickup_date'date',
         TIME_FORMAT(pickup_time, '%h %i %s %p')'time', (users.fullname)'receiver'
          from picker_R_kid
          inner join pickers on pickers.picker_id=picker_R_kid.dropOffpicker_id
          inner join kid on picker_R_kid.kid_id=kid.kid_id
          inner join pickups on pickups.picker_R_kid_id=picker_R_kid.picker_R_kid_id
          inner join users on users.users_id=pickups.users_id where pickup_date
              between '$start_date' and '$end_date' ");
         $dropoffs = $query->result();
        echo json_encode($dropoffs);
    }



    public function range_summary_for_printingpickups()
    {
        //$defaut=$this->input->post('start_date');

        $start_date=$this->input->post('from_date');
        $end_date=$this->input->post('to_date');

        //var_dump($start_date);die;
        $query = $this->db->query(" select (pickers.fullname)'picker',(kid.kid_fullname)'kid',pickup_date'date',
         TIME_FORMAT(pickup_time, '%h %i %s %p')'time', (users.fullname)'receiver'
          from picker_R_kid
          inner join pickers on pickers.picker_id=picker_R_kid.dropOffpicker_id
          inner join kid on picker_R_kid.kid_id=kid.kid_id
          inner join pickups on pickups.picker_R_kid_id=picker_R_kid.picker_R_kid_id
          inner join users on users.users_id=pickups.users_id
      
       where pickup_date
             between '$start_date' and '$end_date' ");
        $weekly_summary = $query->result();

        $output = '';
        $output .=
            '<table class="table table-bordered">
                         <tr>
                                                          <th>DATE</th>
                                                            <th>TIME</th>
                                                            <th>KIDS NAME</th>
                                                            <th>PICKERS NAME</th>
															 <th>TUTORS NAME</th>
                                    
                                   
                                </tr>
                            </thead>
               
                            ';

        //get count
        $result=$query->num_rows();
        //echo $result;
        if($result > 0)
        {
            //echo "heoll";
            foreach($weekly_summary as $record)
            {
                //var_dump($record);die;
                $output .= ' <tr>
                          <td>'. $record->date .'</td>
                          <td>'. $record->time .'</td>
                          <td>'. $record->kid .'</td>
                          <td>'. $record->picker .'</td>
                          <td>'. $record->receiver .'</td>
                          
                      
                          
                     </tr>
               ';
            }
        }
        else
        {
            $output .= '
                <tr>
                     <td colspan="5">No Records Found</td>
                </tr>
           ';
        }

        $output .= '</table>';
        //var_dump($output); die;
        echo $output;
        //echo $weekly_summary;
    }


     public function today_dropOff()
    {

        $query= $this->db->query("select (pickers.fullname)'picker',(kid.kid_fullname)'kid',dropOff_date'date',CONVERT(VARCHAR(10), dropOff_time, 108)'time', (users.fullname)'receiver'
      from picker_R_kid inner join kid on picker_R_kid.kid_id=kid.kid_id
      inner join pickers on pickers.picker_id=picker_R_kid.dropOffpicker_id
      inner join dropOff on dropOff.picker_R_kid_id=picker_R_kid.picker_R_kid_id
      inner join users on users.users_id=picker_R_kid.users_id where dropOff_date=CONVERT(VARCHAR(10), GETDATE(), 111) ");
        $today_dropOff= $query->result();
        return $today_dropOff;
    }


 public function today_pickups()
    {
        

         $query= $this->db->query("select (pickers.fullname)'picker',(kid.kid_fullname)'kid',pickup_date'date',
         TIME_FORMAT(pickup_time, '%h %i %s %p')'time', (users.fullname)'receiver'
          from picker_R_kid
          inner join pickers on pickers.picker_id=picker_R_kid.dropOffpicker_id
          inner join kid on picker_R_kid.kid_id=kid.kid_id
          inner join pickups on pickups.picker_R_kid_id=picker_R_kid.picker_R_kid_id
          inner join users on users.users_id=pickups.users_id where  pickup_date=CONVERT(now(), DATE)
      
      ");
        $today_dropOff= $query->result();
        return $today_dropOff;
    }

  
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
    
   
    
        $password=$this->input->post("password"); $result=$this->valuserEmailate_old_password($pass,$user_email);
        $new_pass=$this->input->post("new_pass");
        $new_pass_confirm=$this->input->post("new_pass_confirm");
        $user_email=$this->input->post("user_email");

            $passwordToken=$user_email.$password;
             $pass=hash('sha512',$passwordToken);  
        //var_dump($new_pass_confirm); die;
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


