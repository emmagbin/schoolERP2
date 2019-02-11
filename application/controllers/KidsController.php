
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class KidsController extends CI_Controller {
 
public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            //$this->load->Controller('user','',TRUE);
            //$this->load->model('Service_Category_Model');
        }

public function index()
    {
        //var_dump('heloo'); die;
        $this->load->view('viewKid'); die;
    
         if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $users['fullname'] = $session_data['fullname'];
            $users['email'] = $session_data['email'];
            $users['role'] = $session_data['role'];
            $users['status'] = $session_data['status'];
            $users['users_id'] = $session_data['users_id'];

            $users['classes']=$this->all_classes();
            $users['allkids']=$this->all_kids();
            //var_dump( $users['allkids']); die;

            $query= $this->db->query("select
            (SELECT   count(*) FROM kid WHERE gender='Male' and status='A') as totalMales,
            (SELECT   count(*) FROM kid WHERE gender='Female' and status='A') as totalFemales,
            (SELECT   count(*) FROM kid WHERE status='A') as totalActive,
            (SELECT   count(*) FROM kid WHERE status='D' ) as totalNotActive");
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
             
            $users['active']='kids';
               // $this->load->view('viewKid',$class);
    
            // $users['active']='user';
            $this->load->view('viewKid',$users);

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

    public function all_kids()
    {

        $this->db->select("kid_id, kid_fullname, gender, class_name,classes.class_id,kid_photo,status ");
        $this->db->from('kid');
        $this->db->join('classes','kid.class_id=classes.class_id');
        $query = $this -> db -> get();
        return $query->result();
    }

     public function addUser()

    {


//creating a user
//check to see whether the email exist
//hash token ==email+contact then hash


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





public function addNewerKId()
            {
 //Check whether user upload picture
            if(!empty($_FILES['pictureforkid']['name'])){

                    $config['upload_path'] = 'uploads/kids/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = $_FILES['pictureforkid']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if($this->upload->do_upload('pictureforkid'))
                    {
                        $uploadData = $this->upload->data();
                        $picture = $uploadData['file_name'];
                    }
                    else
                    {
                        $picture = '';
                    }
                }
             else{
                    $picture = '';
                }


             //Check whether user upload picture
                        if(!empty($_FILES['picturepicker']['name'])){

                                $config['upload_path'] = 'uploads/pickers/';
                                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                $config['file_name'] = $_FILES['picturepicker']['name'];
                                
                                //Load upload library and initialize configuration
                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);
                                
                                if($this->upload->do_upload('picturepicker'))
                                {
                                    $uploadData = $this->upload->data();
                                    $picturepick = $uploadData['file_name'];
                                }
                                else
                                {
                                    $picturepick = '';
                                }
                            }
                         else{
                                $picturepick = '';
                            }


                             $kid_fullname= $this->input->post('kid_fullname');
                             $kgender=$this->input->post('kgender');
                             $class_id= $this->input->post('class_id');


                              $fullname=  $this->input->post('Pfullname');
                              $contact   = $this->input->post('contact');
                              $pgender= $this->input->post('pgender');
                              $relationship=$this->input->post('relationship');
                            //  $picturepick=$picturepick;


                                $Kidresult=$this->addkid($kid_fullname,$kgender,$class_id,$picture);
                                $actualKid_id=$Kidresult['0']['kid'];


                                  $query= $this->db->query("   
                                              SELECT IFNULL( COUNT(*), 0 ) as totalnumber FROM pickers WHERE
													contact= '$contact'
													and pickers.fullname='$fullname'
													and pickers.gender='$pgender'");
                                                    $contact= $query->result_array();
                                                    $myvalue=$contact['0']['totalnumber'];
                                                    if($myvalue==0)
                                                    {
                                                        $contactNewInsert=$this->input->post('contact');
                                                       $pickerresult=$this-> addPicker($fullname,$contactNewInsert,$pgender,$relationship,$picturepick);
                                                    $actualpicker_id_from_final =$pickerresult['0']['pickerid'];
                                                    //var_dump($actualpicker_id_from_db);  die;
                                                    }
                                                    else{
                                                        $contact   = $this->input->post('contact');
														$fullname=  $this->input->post('Pfullname');
														$pgender= $this->input->post('pgender');






                                  $query= $this->db->query("  
                                                        	SELECT picker_id as picker_id FROM pickers WHERE contact= '$contact'
														and pickers.fullname='$fullname'
														and pickers.gender='$pgender' ");
                                                              $picker_id= $query->result_array();
                                                              $picker_id=$picker_id['0']['picker_id'];
                                                      // var_dump($picker_id); die;
                                                       $actualpicker_id_from_final=$picker_id;
                                                    }



                                $picker_R_kiddata = array( 
                                        'dropOffpicker_id' => $actualpicker_id_from_final, 
                                         'kid_id' => $actualKid_id,);

                                $kid_sms_alert = array(
									'picker_id' => $actualpicker_id_from_final,
									'kid_id' => $actualKid_id,);

                               // var_dump($picker_R_kiddata); die;
                                $this->db->insert('picker_R_kid', $picker_R_kiddata);

								$this->db->insert('kid_sms_alert', $kid_sms_alert);
                                redirect('kids');
            }

        

        public function addkid($kid_fullname,$kgender,$class_id,$picture)
        {
                $data = array( 
                           
                            'kid_fullname' => $kid_fullname,
                             'gender' => $kgender,
                              'class_id' =>$class_id,
                               'status' =>'A',
                            'kid_photo' => 'uploads/kids/'.$picture
                );
                $this->db->insert('kid', $data);
                 $query= $this->db->query("SELECT MAX(kid_id)'kid' FROM kid");
                  $kid_id= $query->result_array();
            return $kid_id;

        }

        public function addPicker($fullname,$contact,$pgender,$relationship,$picturepick)
        {
          $urltoPick='uploads/pickers/'.$picturepick;
                  $dataPicker = array( 
                            'fullname' =>$fullname,
                             'contact' =>$contact, 
                              'gender' =>$pgender,
                              'status' =>'A',
                              'relationship' => $relationship, 
                               'photo' => $urltoPick,
                );
                 // var_dump($dataPicker); die;
               
                $this->db->insert('pickers', $dataPicker);
                    $query= $this->db->query("SELECT MAX(picker_id)'pickerid' FROM pickers");
                  $picker_id= $query->result_array();

               return $picker_id;

        }


        public function addNewePicker()
            {
             //Check whether user upload picture
                        if(!empty($_FILES['newpicturepicker']['name'])){

                                $config['upload_path'] = 'uploads/pickers/';
                                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                $config['file_name'] = $_FILES['newpicturepicker']['name'];
                                
                                //Load upload library and initialize configuration
                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);
                                
                                if($this->upload->do_upload('newpicturepicker'))
                                {
                                    $uploadData = $this->upload->data();
                                    $pictureNewpick = $uploadData['file_name'];
                                }
                                else
                                {
                                    $picture = '';
                                }
                            }
                         else{
                                $picture = '';
                            }

                              $fullname=  $this->input->post('pickername');
                              $contact   = $this->input->post('pickercontact');
                              $pgender= $this->input->post('pickergender');
                              $relationship=$this->input->post('pickerrelationship');

                              $kids_id=$this->input->post('txtkidid');



                                                    $query= $this->db->query("   
                                                    SELECT IFNULL( COUNT(*), 0 ) as totalnumber FROM pickers WHERE
													contact= '$contact'
													and pickers.fullname='$fullname'
													and pickers.gender='$pgender'
														");
                                                          $contact= $query->result_array();
                                                          $myvalue=$contact['0']['totalnumber'];
                                                          if($myvalue==0)
                                                          {
                                                              $contactNewInsert=$this->input->post('pickercontact');
                                                             $pickerresult=$this-> addPicker($fullname,$contactNewInsert,$pgender,$relationship,$pictureNewpick);
                                                          $actualpicker_id_from_final =$pickerresult['0']['pickerid'];
                                                         // var_dump($actualpicker_id_from_db);  die;
      
                                                          }
                                                          else{
                                                              $contact   = $this->input->post('pickercontact');
															  $fullname=  $this->input->post('pickername');
															  $pgender= $this->input->post('pickergender');

                                                               $query= $this->db->query("                                                               SELECT picker_id as picker_id FROM pickers WHERE contact= '$contact'
														and pickers.fullname='$fullname'
														and pickers.gender='$pgender'
																");
                                                                    $picker_id= $query->result_array();
                                                                    $picker_id=$picker_id['0']['picker_id'];
                                                            // var_dump($picker_id); die;
                                                             $actualpicker_id_from_final=$picker_id;
                                                          }


                                



                                $picker_R_kiddata = array( 
                                        'dropOffpicker_id' => $actualpicker_id_from_final, 
                                         'kid_id' => $kids_id,);
                                //var_dump($picker_R_kiddata); die;
                                $this->db->insert('picker_R_kid', $picker_R_kiddata);

                        redirect('kids');
            }

            public function select_a_kid_pickers()
            {
                $kid_id=$this->input->post('kidid');
               // var_dump($kid_id); die;
        $this->db->select("pickers.fullname,pickers.contact,pickers.relationship,photo");
        $this->db->from('pickers');
        $this->db->join('picker_R_kid','pickers.picker_id=picker_R_kid.dropOffpicker_id');
        $this -> db -> where('kid_id', $kid_id);
        $query = $this->db-> get();
        $mypickers= $query->result_array();             
        echo json_encode($mypickers);


            }

            public function editKId()
            {

               if(!empty($_FILES['kideditedpicture']['name'])){

                    $config['upload_path'] = 'uploads/kids/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = $_FILES['kideditedpicture']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if($this->upload->do_upload('kideditedpicture'))
                    {
                        $uploadData = $this->upload->data();
                        $kideditedpicture = $uploadData['file_name'];
                    }
                    else
                    {
                        $kideditedpicture = '';
                    }
                }
             else{
                    $kideditedpicture = '';
                }


                
                  $mykidd_id= $this->input->post('txtkididkid');          
                      if($kideditedpicture=="")
                              {
                                $gurl= $this->input->post('photoIdkid');
                                 

                              }
                              else
                              {
                               $gurl='uploads/kids/'.$kideditedpicture;
                              }


                 $data = array(
                    
                     'kid_fullname' => $this->input->post('txtkkidfullnamekid'),
                      'kid_photo' =>$gurl,
                       'gender' => $this->input->post('txtgenderkid'),
                       'class_id' => $this->input->post('class_idkid'),
                      

                );

                                           $this->db->set($data);
                                            $this->db->where('kid_id',$mykidd_id);
                                           $this->db->update("kid",$data);

                                           redirect('kids', 'refresh');
                /// var_dump($data); die;

            }


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

    



    public   function Enablekid()
    {
        $kidid=$this->input->post('kid_id_dis_id');
       // var_dump($kidid); die;
        $data=array(
            'Status'=>'A'
        );
        $this->db->set($data);
        $this->db->where('kid_id',$kidid);
        $this->db->update("kid",$data);
        redirect('kids');
    }

 public   function disableKid()
    {
        $kidid=$this->input->post('kid_id_dis_id');
        //var_dump($kidid); die;
        $data=array(
            'Status'=>'D'
        );
        $this->db->set($data);
        $this->db->where('kid_id',$kidid);
        $this->db->update("kid",$data);
        redirect('kids');
    }

     public   function deleteKid()
    {
         $id=$this->input->post('kid_id_dis_id');
        // var_dump($id); die;
         $this->db->where('kid_id', $id);
         $this->db->delete('kid');
        redirect('kids');
    }
       
}


