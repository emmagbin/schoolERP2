
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class opened_cases_controller extends CI_Controller {

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
            $cases['user_full_name'] = $session_data['user_full_name'];
            $cases['email'] = $session_data['user_email'];
            $cases['password'] = $session_data['password'];
            $cases['user_role'] = $session_data['user_role'];
            $cases['case_id']=$this->all_case_status();
            $cases['total_cases']=$this->count_opened_cases();
            $cases['service_category_name']=$this->all_service_category();
            $this->load->view('opened_cases',$cases);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }





    public function select_a_transaction()
        {
            $transaction_id= $this->input->post("transaction_id");
            //var_dump($transaction_id); die;

//CALLING WEBSERVICE
 $fullstring=file_get_contents("http://184.168.147.165:81/bankmoneycustomersupportApi/index.php?trans_id='$transaction_id'"); 

//var_dump($fullstring); die;
echo $fullstring; die;

//          $query= $this->db->query("select * from case_management 
// where case_management.transaction_id='$transaction_id'");
//         $result = $query->row(); 
//         $result_row=$query->num_rows();
               if($result_row >=1)
               {
                   // $fullstring= $result->transaction_id ."|".$result->case_id ."|".$result->service_category_name ."|".$result->depositors_name ."|".$result->receivers_name."|".$result->bank_name."|".$result->account_number."|".$result->amount."|".$result->depositors_contact."|".$result_row;
               echo $fullstring;
                
                
                
               }
               else
               {
                $fullstring=0;
               echo $fullstring;

               }
        }

    public function all_service_category()
    {
        $query= $this->db->query("select service_category_name from service_category");
        $service_category_name= $query->result();

        return $service_category_name;
    }


    public function all_case_status()
    {
        $query= $this->db->query("select case_id,transaction_id from case_description where CaseStatus='Opened Case'");
        $cases= $query->result();
        return $cases;
    }

    public function count_opened_cases()
    {
        $query= $this->db->query("select count(*) as total_cases from case_description where CaseStatus='Opened Case'");
        $results= $query->row();
        $cases['total_cases']=$results->total_cases;
        return $cases['total_cases'];


    }

    public function all_subject_unit()
    {
        $query= $this->db->query("select * from unit");
        $units= $query->result();
        return $units;
    }





    public	 function update()
    {
        $id=$this->input->post("id");
        $data = array('service_category_name' => $this->input->post('service_category_name') );
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update("service_category",$data);
        redirect('Subject_Experts');
    }




    public function select_description()
    {
        $transaction_id= $this->input->post("transaction_id");
        $case_id= $this->input->post("case_id");

        $query_description= $this->db->query("select * from case_description where case_description.transaction_id='$transaction_id' and case_id=$case_id");
        $data=$query_description->result_array();
        echo json_encode($data);

    }


    public function select_a_descriptions_for_check_status()
    {
        $transaction_id= $this->input->post("transaction_id");
        $time_date = $this->input->post("time_date");

        $query_description= $this->db->query("select * from case_description 
        where cast (time_date as date) = '$time_date' and transaction_id='$transaction_id'");
        $data=$query_description->result_array();
        echo json_encode($data);

    }



    public function add()

    {
        $data = array(
            'transaction_id' => $this->input->post('transaction_id'),
            'descriptions' => $this->input->post('descriptions'),
            'complainant_name' => $this->input->post('complainant_name'),
            'complainant_contact' => $this->input->post('complainant_contact'),
            'service_category' => $this->input->post('servicecat'),
            'CaseStatus' =>"Pending",
            'time_date' => date("Y-m-d H:i:s")
        );

        $this->db->insert('case_description', $data);
        $result=1;
        echo $result;
        //redirect('case');

    }
    public function add_comment()

    {
        $case_id = $this->input->post('case_number');

        $data = array(
            'c_case_id' => $case_id,
            'c_compliance_name' => $this->input->post('compliance_name'),
            'c_comment' => $this->input->post('comment'),
            'c_time_date' => date("Y-m-d H:i:s"),
        );

        $data_update = array(
            'CaseStatus' =>'Pending',
        );
       // var_dump($data_update); die;
        //insert into complian_comment table
        $this->db->insert('compliance_comment', $data);

        //update case description table changing case opened to pending
        $this->db->set($data_update);
        $this->db->where('case_id',$case_id);
        $this->db->update("case_description",$data_update);

        redirect('opened_case');
    }

    //decline to an open case
    public function decline()
    {
        $case_id = $this->input->post('case_id');

        $data = array(
            'c_case_id' => $case_id,
            'c_compliance_name' => $this->input->post('compliance_name'),
            'c_comment' => $this->input->post('comment'),
            'c_time_date' => date("Y-m-d H:i:s"),
        );

        $data_update = array(
            'CaseStatus' =>'Decline',
        );
         //var_dump( $case_id); die;
        //insert into complian_comment table
        $this->db->insert('compliance_comment', $data);

        //update case description table changing case opened to pending
        $this->db->set($data_update);
        $this->db->where('case_id',$case_id);
        $this->db->update("case_description",$data_update);

         $result=1;
        echo $result;
        //redirect('opened_case');
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


}

