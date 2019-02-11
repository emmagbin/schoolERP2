
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class OrganisationOnboarding extends CI_Controller {
 
public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');

$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('encrypt');
        }

public function index()
    {

        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $users['fullName'] = $session_data['fullName'];
            $users['userEmail'] = $session_data['userEmail'];
            $users['roleID'] = $session_data['roleID'];


             $users['roles']=$this->all_roles(); 
            $users['all_Business']=$this->all_Business();
            $this->load->view('organisationOnboarding',$users);


            

              }
        else
        {
        //If no session, redirect to login page
        redirect('login', 'refresh');
        }

    }
 public function all_roles()
    {
        $query= $this->db->query("select rolename from roles ");
        $users= $query->result();
        return $users;
    }
    /*[orgs](
    [orgCode] [varchar](100) NOT NULL,
    [orgName] [varchar](max) NOT NULL,
    [orgStatus] [varchar](1) NOT NULL,
    [CreatedBy] [varchar](100) NULL,
    [orgType] [varchar](60) NULL,
    [orgIndustry] [varchar](60) NULL,
    [suspenseAccountNumber] [varchar](max) NULL,
    [CreatedOn] [datetime] NULL,
    [lastUpdatedOn] [datetime] NULL,
    [adminEmail] [varchar](50) NULL,
    [adminContact] [varchar](50) NULL*/
    
    public function AddBusiness()
    {
       $contact = $this->input->post('Admincontact');
        $password=hash('sha512',$contact);

          $mycode=rand(1000,9999);
        $data = array(
            'orgCode' =>$mycode,
            'adminfullname' =>$this->input->post('Adminfullname'),

            'adminEmail' => $this->input->post('Adminemail'),

            'adminContact' => $this->input->post('Admincontact'),

            'orgName' => $this->input->post('Bname'), 
            'orgType' => $this->input->post('Btype'),
            'orgIndustry' => $this->input->post('BIindustry'),
            
            'orgdigitalAddress' => $this->input->post('BdigitalAddress'),
            'orgcontact' => $this->input->post('Bcontact'),

            'orgmail' => $this->input->post('Bemail'),

            'CreatedOn' => date("Y-m-d"),

            'orgStatus'=>'A',

        );

       // var_dump($data); die;

         $this->db->insert('orgs', $data);

         

        $dataUser = array(


            'FName' =>$this->input->post('Adminfullname'),

             'orgCode' =>$mycode,
            'userEmail' => $this->input->post('Adminemail'),
            'Phone' => $this->input->post('Admincontact'),
            'userRole' => 'BAdmin', 
            'dateCreated' => date("Y-m-d"),
            'LoginToken'=>$password,
            'Status'=>'A',
        );

        //var_dump($dataUser); die;
        $this->db->insert('orgUsers', $dataUser);

        redirect('onboarding');

    }

 public function total_users()
        {
            $query= $this->db->query("select count(*) as total_users from users where 
            delete_flag='N'");
            $results = $query->row();
            $users['total_users']=$results->total_users; 
            return $users['total_users'];
        }


public function all_Business()
        {
            $query= $this->db->query("select * from orgs");
             $all_Business= $query->result();
        return $all_Business;
        }



// Send Gmail to another user
function resetpassword()
{
     $email_to='emmagbin@yahoo.com';//$this->input->post("user_email");
    $newpassword=mt_rand();

    require_once(APPPATH.'third_party/PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "emmagbin@gmail.com";  // user email address
        $mail->Password   = "ima@nkawkaw";            // password in GMail
        $mail->SetFrom('emmagbin@gmail.com', 'BanqMoni');  //Who is sending
        $mail->isHTML(true);
        $mail->Subject    = "Password Reset for BanqMonis Customer Service Portal";
        $mail->Body      = "
            <html>
             <head>
                
            </head>
            <body>
            <h3>Hello   </h3>
            <p>Your password Reset Code is $newpassword</p><br>
           
            </body>
            </html>
        ";
        $destino = $email_to; // Who is addressed the email to
        $mail->AddAddress($destino, "Receiver");
        if(!$mail->Send()) {
            return false;

        } 
        else {
            return true;
        }

}





















public function add()
        {            
             $password_combination_1=$this->input->post('user_email');

            $pass=strtolower($password_combination_1);
           // $pass=  $password_combination_1.date("l");
            $password=hash('sha512',$pass);  
            $data=array(
                'user_full_name' => $this->input->post('user_full_name'),
                'user_email' => $this->input->post('user_email'),
                'gender' => $this->input->post('gender'),
                'phonenumber' => $this->input->post('phonenumber'),
                'password' =>   $password,
                'user_role' =>$this->input->post('user_role'),
                'delete_flag' =>'N',
                'disable_flag' =>'N'               
             );
            //var_dump($data); die;

            $result=$this->validate_email($password_combination_1);


             if($result=='1')
               {
                echo $result;
             
               }
           else{ 
                $this->db->insert('lunchtable', $data);
                redirect('create_user');
               echo $result;
                }
              
                
        }

public function validate_email($password_combination_1)
{
    $query=$this->db->query("select * from users where user_email='$password_combination_1' "); 
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







    public   function delete()
    {
        $id=$this->input->post("user_email");
        $data=array(
            'delete_flag'=>'Y'
        );
        $this->db->set($data);
        $this->db->where('user_email',$id);
        $this->db->update("users",$data);
        redirect('create_user');
    }




    public   function update()
    {
        $id=$this->input->post("user_email");
       // var_dump($id); die;
        $data = array(
            'user_full_name' => $this->input->post('user_full_name'),
             'gender' => $this->input->post('gender'),
              'phonenumber' => $this->input->post('phonenumber')
            
             );

        $this->db->set($data);
        $this->db->where('user_email',$id);
        $this->db->update("users",$data);
        redirect('create_user');

    }

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


                        // $result=$this->compare_password($new_pass,$new_pass_confirm);

                            //var_dump($result); die;
                                //  if($result=='1')
                                    //{

                            //          $this->db->query("update users set password='$pass' where user_email='$user_email' "); 
                            //               $data = array('password' => $pass );
                            //                echo $user_email; die;
                            //                  $this->db->set($data);
                                           // $this->db->where('user_email',$user_email);
                                           // $this->db->update("users",$data);
                                           //  redirect('ServiceCategory');
                                        //$result=1;

                                    //ima@ite.comWednesday
                                       //     echo $result;   
                                    //}
                                    //else
                                    //{
                                    //  $result=='2';
                                    //  echo $result;
                                    //}
                                
               }
               else{ 
                    echo $result;
                }

    
}
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

public function add_description()
        {
            $data = array(
                'transaction_id' => $this->input->post('transaction_id'),
                'descriptions' => $this->input->post('descriptions'),
                'time_date' => date("Y-m-d H:i:s")
                );
            
             $this->db->insert('case_description', $data);
            $result=1;
             echo $result;
                //redirect('case');
        }
}

