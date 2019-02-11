
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class GuardiansController extends CI_Controller {
 
public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            //$this->load->model('Service_Category_Model');
        }

public function index()
    {
    //  $class['active']='guardian';
    // //$active='on';
    // $this->load->view('viewGuardian',$class);
    
     if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $users['fullname'] = $session_data['fullname'];
            $users['email'] = $session_data['email'];
            $users['role'] = $session_data['role'];
            $users['status'] = $session_data['status'];
            $users['users_id'] = $session_data['users_id'];
            
           $users['pickers']=$this->all_pickers();
           $users['classes']=$this->all_classes();

                $query= $this->db->query("  select
        (SELECT   count(*) FROM pickers WHERE gender='Male' and status='A') as totalMales,
         (SELECT   count(*) FROM pickers WHERE gender='Female' and status='A') as totalFemales,
         (SELECT   count(*) FROM pickers WHERE status='A') as totalActive,
         (SELECT   count(*) FROM pickers WHERE status='D' ) as totalNotActive");
        $results = $query->row();
        $users['totalMales']=$results->totalMales;
        $users['totalFemales']=$results->totalFemales;
        $users['totalActive']=$results->totalActive;
        $users['totalNotActive']=$results->totalNotActive;

        

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

         $users['active']='guardians';
         $this->load->view('viewGuardian',$users);

                }
        else
        {
        //If no session, redirect to login page
        redirect('login', 'refresh');
        }


    }
    
      public function all_classes()
    {
        $query= $this->db->query("select * from classes");
        $classes= $query->result();
        return $classes;
    }
     public function all_pickers()
    {
        $query= $this->db->query("select * from pickers ");
        $pickers= $query->result();
        return $pickers;
    }

public   function unlock()
    {
        $picker_id=$this->input->post('Guardianidunlock');
        //var_dump($userEmail); die;
        $data=array(
            'Status'=>'A'
        );
        $this->db->set($data);
        $this->db->where('picker_id',$picker_id);
        $this->db->update("pickers",$data);
        redirect('guardians');
    }

 public   function disable()
    {
        $picker_id=$this->input->post('Guardianid');
       // var_dump($userEmail); die;
        $data=array(
            'Status'=>'D'
        );
        $this->db->set($data);
        $this->db->where('picker_id',$picker_id);
        $this->db->update("pickers",$data);
        redirect('guardians');
    }

     public   function delete()
    {
         $id=$this->input->post('Guardianiddelete');
         var_dump($id); die;
         $this->db->where('email', $userEmail);
         $this->db->delete('users');
        redirect('user');
    }

    // 
    
   

// public function change_password()
// {
//         $password=$this->input->post("password");
//         $new_pass=$this->input->post("new_pass");
//         $new_pass_confirm=$this->input->post("new_pass_confirm");
//         $user_email=$this->input->post("user_email");


//              $pass=hash('sha512',$password);  
//         //var_dump($new_pass_confirm); die;
//          $result=$this->valuserEmailate_old_password($pass,$user_email);
//          //var_dump($result); die();
//              if($result=='1')
//                {
//                             if($new_pass==$new_pass_confirm)
//                         {

//                                             $data = array('accountToken' => hash('sha512', $new_pass) );
//                                             $this->db->set($data);
//                                             $this->db->where('userEmail',$user_email);
//                                            $this->db->update("userAccounts",$data);

//                             echo $result;
//                         }
//                         else
//                         {
//                                 //return 2;
//                                 $result=2;
//                                 echo $result;
//                         }


                      
//                }
//                else{ 
//                     echo $result;
//                 }

    
// }

// //userEmail,accountToken
//         public function valuserEmailate_old_password($pass,$user_email)
//         {
//             $query=$this->db->query("select accountToken from userAccounts where accountToken='$pass' and userEmail='$user_email' "); 
//                    $result=$query->num_rows();
//                 if($result >=1)
//                 {
//                         return 1;
//                 }
//                 else
//                 {
//                         return 0;
//                 }
//         }



    public function editpicker()
    {

        //Check whether user upload picture
            if(!empty($_FILES['guardaineditedpicture']['name'])){

                    $config['upload_path'] = 'uploads/pickers/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = $_FILES['guardaineditedpicture']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if($this->upload->do_upload('guardaineditedpicture'))
                    {
                        $uploadData = $this->upload->data();
                        $guardaineditedpicture = $uploadData['file_name'];
                    }
                    else
                    {
                        $guardaineditedpicture = '';
                    }
                }
             else{
                    $guardaineditedpicture = '';
                }


                              $gid=  $this->input->post('gid');
                               $gfullname=  $this->input->post('gfullname');
                              $ggender   = $this->input->post('ggender');
                              $gcontact= $this->input->post('gcontact');
                              $grelationship=$this->input->post('grelationship');

                              if($guardaineditedpicture=="")
                              {
                                $gurl=$this->input->post('txtusers_photo_url');

                              }
                              else
                              {
                               $gurl='uploads/pickers/'.$guardaineditedpicture;
                              }

                        $data = array(
                       'fullname' => $gfullname,
                       'gender' => $ggender,
                       'contact' =>  $gcontact,
                       'photo' => $gurl,
                       );
                                            $this->db->set($data);
                                            $this->db->where('picker_id',$gid);
                                           $this->db->update("pickers",$data);

                                           redirect('guardians', 'refresh');


    }

public function select_pickers_kids()
{
 $gid=$this->input->post('gid');
          // var_dump($gid); die;
        $this->db->select(" kid.kid_id, kid_fullname,kid_photo,kid.gender, class_name,relationship,picker_R_kid_id");
        $this->db->from('kid');
        $this->db->join('picker_R_kid',' picker_R_kid.kid_id=kid.kid_id');
        $this->db->join('pickers',' pickers.picker_id=picker_R_kid.dropOffpicker_id ');

        $this->db->join('classes',' classes.class_id=kid.class_id ');
        $this -> db -> where('dropOffpicker_id', $gid);
        $query = $this->db-> get();
        $mypickers= $query->result_array();             
        echo json_encode($mypickers);



}

public function unpick_kid()
{
        $kid_id_unpick=$this->input->post('kid_id_unpick');
      // var_dump($kid_id_unpick); die;
       
         $this->db->where('picker_R_kid_id', $kid_id_unpick);
         $this->db->delete('picker_R_kid');
         $outcome='done';
         echo json_encode($outcome);
       // redirect('user');


       //   $id=$this->input->post('Guardianiddelete');
       //   var_dump($id); die;
       //   $this->db->where('email', $userEmail);
       //   $this->db->delete('users');
       //  redirect('user');

}
        
}

