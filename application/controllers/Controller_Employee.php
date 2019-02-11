<?php defined('BASEPATH') OR exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class Controller_Employee extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function newEmployee()
    {

        if($this->session->userdata('logged_in'))
            {
                $session_data = $this->session->userdata('logged_in');
                $users['fullname'] = $session_data['fullname'];
                $users['Email'] = $session_data['Email'];
                $users['Privilages'] = $session_data['Privilages'];
                $users['StatusInd'] = $session_data['StatusInd'];
                
                $users['FirstLogin'] = $session_data['FirstLogin'];
                $admissionNo[0]=$this->admissionNo();
                $myadissionNo=$admissionNo[0]['count(*)'];
                $users['myadissionNo']= 'Std'.($myadissionNo+1);

                $users['mystudent_id']= '4042'.($myadissionNo+1).date('Y');
                //var_dump($myadissionNo); die;
               // $this->load->view('viewUsers');
            $this->load->view('viewNewEmployee',$users);
            }
            else
            {
            redirect('login', 'refresh');
            }
            


    }

public function students()
{
    if($this->session->userdata('logged_in'))
    {
        $session_data = $this->session->userdata('logged_in');
        $users['fullname'] = $session_data['fullname'];
        $users['Email'] = $session_data['Email'];
        $users['Privilages'] = $session_data['Privilages'];
        $users['StatusInd'] = $session_data['StatusInd'];
        $users['FirstLogin'] = $session_data['FirstLogin'];
       // $this->load->view('viewNewUser');
    $this->load->view('viewStudents',$users);
    }
    else
    {
    redirect('login', 'refresh');
    }

    

}
   public function  changePassword()
   {
            if($this->session->userdata('logged_in'))
            {
                $session_data = $this->session->userdata('logged_in');
                $users['fullname'] = $session_data['fullname'];
                $users['Email'] = $session_data['Email'];
                $users['Privilages'] = $session_data['Privilages'];
                $users['StatusInd'] = $session_data['StatusInd'];
                $users['FirstLogin'] = $session_data['FirstLogin'];
                $users['mylogintoken'] = $session_data['mylogintoken'];
                
            $this->load->view('viewchangePassword',$users);
            }
            else
            {
            redirect('login', 'refresh');
            }
   
   }


   public function  profile()
   {
    if($this->session->userdata('logged_in'))
    {
        $session_data = $this->session->userdata('logged_in');
        $users['fullname'] = $session_data['fullname'];
        $users['Email'] = $session_data['Email'];
        $users['Privilages'] = $session_data['Privilages'];
        $users['StatusInd'] = $session_data['StatusInd'];
        $users['FirstLogin'] = $session_data['FirstLogin'];
       // $this->load->view('viewProfile');
    $this->load->view('viewProfile',$users);
    }
    else
    {
    redirect('login', 'refresh');
    }
  
   }


   public function changing_password()
   {
                $password=$this->input->post("password");
                $user_email=$this->input->post("user_email");
                $oldpassword=hash('sha512',$user_email.$password);
                $mylogintoken=$this->input->post("mylogintoken");
                if($oldpassword==$mylogintoken)
                {   
                    $new_pass=$this->input->post("new_pass");
                    $newpassword=hash('sha512',$user_email.$new_pass);

                    $data = array('password' => $newpassword, 'FirstLogin'=>'No' );
                    $this->db->set($data);
                    $this->db->where('Email',$user_email);
                    $this->db->update("users",$data);

                    //updating firstlogin in the session
                    $FirstLogin = $this->session->userdata('logged_in');  
                    $FirstLogin['FirstLogin'] = "No";  
                    $this->session->set_userdata('logged_in', $FirstLogin);

                    $output='1';
                }
                else
                {
                    $output='0';
                }
                echo $output;
    }

    public function newusercreation()
    {
        $user_email=$this->input->post("Email");
        
        $Surname=$this->input->post("Surname");
        $password=hash('sha512',$user_email.$Surname);

        $query= $this->db->query(" SELECT count(*)'totalEmails' FROM users WHERE Email= '$user_email'");
        $results = $query->row();
        $totalEmails=$results->totalEmails;
        //var_dump($totalEmails); die;
        if($totalEmails==0)
        {
            $data = array(
                'Firstname' =>$this->input->post('Firstname'),
                'Surname' => $this->input->post('Surname'),
                'Othernames' => $this->input->post('Othernames'),
                'Email' =>$this->input->post('Email'),
                'Password' => $password,
                'Gender' => $this->input->post('Gender'),
                'Privilages' =>$this->input->post('Privilages'),
            );
       
            $this->db->insert('users', $data);
            //var_dump($data); die;
            $output='1';


        }
        else{
            $output='0';
        }

        echo $output;


    }

    public function admissionNo()
    {
        $query= $this->db->query("select count(*) from students ");
        $totalNo= $query->result_array();
        return $totalNo[0];
    }
   
}

// `ID` int(11) NOT NULL,
// `Email` varchar(20) NOT NULL,
// `Username` varchar(50) NOT NULL,
// `Password` varchar(250) NOT NULL,
// `Surname` varchar(100) NOT NULL,
// `Firstname` varchar(100) NOT NULL,
// `Othernames` varchar(100) NOT NULL,
// `Privilages` varchar(20) NOT NULL,

//viewStudentAdmission.php