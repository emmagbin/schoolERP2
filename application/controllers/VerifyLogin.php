<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user','',TRUE);
    }

    function index()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('login_view');
        }
        else
        {
           // FirstLogin Yes
            if($this->session->userdata('logged_in')) {
                $session_data = $this->session->userdata('logged_in');
                $user['FirstLogin'] = $session_data['FirstLogin'];
                if($user['FirstLogin']=="Yes")
                {
                    redirect('changepassword', 'refresh');
                }
                else if($user['FirstLogin']=="No"){
                    redirect('dashboard', 'refresh');
                }
                else{
                    redirect('login', 'refresh');
                }


            }
        }

    }
//users_id,upper(concat(first_name,' ',last_name))fullName, role,status
    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database

        //var_dump($username); die;
        $accountToken=$username.$password;
        

        
        //var_dump($accountToken); die;

        $g=hash('sha512',$accountToken);

         //var_dump($g); die;
        $result = $this->user->login($g);

        //var_dump($result); die;

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    
                    'fullname'=>$row->fullname,
                    'Email'=>$row->Email,
                    'Privilages'=>$row->Privilages,
                    'StatusInd'=>$row->StatusInd,
                    'FirstLogin'=>$row->FirstLogin,
                    'mylogintoken'=>$row->Password

                );
                $this->session->set_userdata('logged_in', $sess_array);

            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'WRONG CREDENTIALS');
            return false;
        }
    }
}
?>