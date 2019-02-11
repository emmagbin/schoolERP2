
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class senior_management_controller extends CI_Controller {
 
public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
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

 			$cases['seniorManagement']=$this->seniorManagement();

			$this->load->view('senior_Management',$cases);
			
			

		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}

	}


	public function index_response()
	{
 		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$cases['user_full_name'] = $session_data['user_full_name'];
			$cases['email'] = $session_data['user_email'];
			$cases['password'] = $session_data['password'];
			$cases['user_role'] = $session_data['user_role'];

           $cases['seniorManagement_response']=$this->seniorManagement_time_response();
           $cases['best_response_cases']=$this->best_time_response_cases();
           $cases['worse_response_cases']=$this->worse_time_response_cases();
           $cases['good_response_cases']=$this->good_time_response_cases();		
          
		   $this->load->view('sm_responsetime',$cases);
		}
		else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}

	}
public function sm_select_a_full_case()
    {
        $case_id= $this->input->post("case_id");
       // var_dump($case_id); die;
        $query_description= $this->db->query("IF   
(SELECT COUNT(*) FROM coo_comment WHERE coo_case_id= '$case_id' ) ='1'  
    (SELECT * FROM ((case_description
right JOIN compliance_comment ON case_description.case_id=compliance_comment.c_case_id)
left JOIN coo_comment on case_description.case_id=coo_comment.coo_case_id)
where compliance_comment.c_case_id='$case_id')  
ELSE 
    (SELECT * FROM (case_description
inner JOIN compliance_comment ON case_description.case_id=compliance_comment.c_case_id)
where  compliance_comment.c_case_id='$case_id')");
        $data=$query_description->result_array();
        echo json_encode($data);

    }

    public function sm_select_a_full_case_base_on_response_time()
    {
        $time_date= $this->input->post("time_date");
        $time_date_in_seconds=$time_date*60.0;
        //var_dump($time_date_in_seconds); die;
        $query_description= $this->db->query("select  * from case_description inner join compliance_comment 
on case_description.case_id=compliance_comment.c_case_id
inner join coo_comment on case_description.case_id=coo_comment.coo_case_id 
where case_description.case_id= (select case_id from dummy_table where t_response ='$time_date_in_seconds')");
        $data=$query_description->result_array();
        echo json_encode($data);

    }

    public function sm_select_a_full_case_base_on_time_date()
    {
        $time_date= $this->input->post("time_date");
        //$time_date_in_seconds=$time_date*60;
        //var_dump($time_date); die;
        $query_description= $this->db->query("select  * from case_description inner join compliance_comment 
on case_description.case_id=compliance_comment.c_case_id
inner join coo_comment on case_description.case_id=coo_comment.coo_case_id 
where case_description.case_id= (select case_id from dummy_table where time_date ='$time_date')");
        
        $data=$query_description->result_array();
       // var_dump($data);die;
        echo json_encode($data);

    }







public function seniorManagement_time_response()
		{
			$case_details= $this->db->query("

select(
select count(case_id) from dummy_table where 
 t_response < dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE())) as total_best_response_times,
 (
select count(case_id) from dummy_table where 
 t_response > dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE())) as total_worse_response_times,
 (
select count(case_id) from dummy_table where 
 t_response = dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE())) as total_good_response_times,


 (
select cast(min(t_response)/3600 as decimal(16,0)) from dummy_table where 
 t_response <dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) as best_response_times,


 (
select cast(min(t_response)/60 as decimal(16,0)) from dummy_table where 
 t_response <dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) as best_response_times_modulus_min,


 (
select min(t_response)%60  from dummy_table where 
 t_response <dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) as best_response_times_modulus_sec,



(
	select case_id from dummy_table 
	where dummy_table.t_response =(
		select min(t_response) from dummy_table where 
		t_response <dummy_table.ideal_time_dummy_table and 
		DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
		 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
		DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) ) as best_response_times_case_id,

 (
select cast(max(t_response)/3600 as decimal(16,0)) from dummy_table where 
 t_response >dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) as worse_response_times,

 (
select  cast(max(t_response)/60 as decimal(16,0)) from dummy_table where 
 t_response >dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) as worse_response_times_modulus_min,

 (
select max(t_response)%60 from dummy_table where 
 t_response >dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) as worse_response_times_modulus_sec,

 (
 select case_id from dummy_table 
	where dummy_table.t_response =(
select max(t_response) from dummy_table where 
 t_response >dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) )) as worse_response_times_case_id,
 (
select cast(min(t_response)/60.0 as decimal(16,2)) from dummy_table where 
 t_response =dummy_table.ideal_time_dummy_table and 
 DATEPART(YEAR, time_date)=DATEPART(year,GETDATE()) and
 DATEPART(month, time_date)=DATEPART(month,GETDATE()) and
 DATEPART(week, time_date)=DATEPART(week,GETDATE()) ) as good_response_times");	
			$data=$case_details->result_array();
			return $data;
		}


public function best_time_response_cases()
		{
 $query= $this->db->query("select case_id ,CONVERT(VARCHAR(19), time_date, 120) as time_date  from dummy_table where 
 t_response <dummy_table.ideal_time_dummy_table");
			 $cases= $query->result();
			return $cases;
		}

		public function worse_time_response_cases()
		{

 $query= $this->db->query("select case_id,CONVERT(VARCHAR(19), time_date, 120) as time_date from dummy_table where 
 t_response >dummy_table.ideal_time_dummy_table order by time_date asc");
			 $cases= $query->result();
			return $cases;
		}


public function good_time_response_cases()  	
		{
 $query= $this->db->query("select case_id, CONVERT(VARCHAR(19), time_date, 120) from dummy_table where 
 t_response =dummy_table.ideal_time_dummy_table");

			 $cases= $query->result();
			 return $cases;
		}



public function seniorManagement()
		{
			$case_details= $this->db->query("select
				(SELECT   count(*) FROM case_description WHERE  DATEPART(day, time_date)=DATEPART(day,GETDATE()) and datepart(year,time_date)=DATEPART(year,GETDATE())) as opened_cases_today,
 
 (SELECT   count(*) FROM case_description WHERE casestatus='Opened Case') as total_pending,

 (SELECT   count(*) FROM case_description WHERE casestatus='Approved') as total_approved,

 (SELECT   count(*) FROM case_description WHERE casestatus='Decline') as total_decline,

/****** january data******/
(SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 1 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JanOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 1 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JanPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 1 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JanApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 1 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JanDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 1 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JanResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 1 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JancooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 1 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JancResponse,

 /****** febuary data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 2 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS FebOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 2 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS FebPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 2 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS FebApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 2 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS FebDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 2 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS FebResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 2 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS FebcooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 2 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS FebcResponse,

 /****** march data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 3 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MarOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 3 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MarPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 3 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MarApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 3 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MarDecline,
  (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 3 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS MarResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 3 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS MarcooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 3 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS MarcResponse,

 /****** april data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 4 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AprOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 4 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AprPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 4 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AprApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 4 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AprDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 4 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS AprResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 4 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS AprcooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 4 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS AprcResponse,

 /****** may data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 5 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MayOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 5 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MayPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 5 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MayApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 5 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS MayDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 5 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS MayResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 5 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS MaycooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 5 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS MaycResponse,

 /****** june data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 6 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JunOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 6 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JunPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 6 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JunApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 6 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JunDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 6 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JunResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 6 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JuncooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 6 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JuncResponse,

 /****** july data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 7 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JulOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 7 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JulPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 7 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JulApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 7 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS JulDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 7 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JulResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 7 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JulcooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 7 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS JulcResponse,

 /****** august data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 8 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AugOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 8 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AugPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 8 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AugApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 8 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS AugDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 8 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS AugResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 8 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS AugcooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 8 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS AugcResponse,

 /****** september data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 9 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS SepOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 9 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS SepPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 9 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS SepApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 9 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS SepDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 9 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS SepResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 9 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS SepcooResponse,
  (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 9 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS SepcResponse,

 /****** october data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 10 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS OctOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 10 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS OctPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 10 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS OctApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 10 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS OctDecline,
 (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 10 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS OctResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 10 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS OctcooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 10 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS OctcResponse,

 /****** november data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) = 11 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS NovOpen,
 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 11 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS NovPending,
 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 11 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS NovApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 11 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS NovDecline,
  (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 11 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS NovResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 11 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS NovcooResponse,
 (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 11 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS NovcResponse,

 /****** december data ******/
 (SELECT   count(*) FROM case_description WHERE
 DATEPART(MONTH, time_date) =12 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS DecOpen,

 (SELECT   count(*) FROM case_description WHERE casestatus!='Approved' and casestatus!='Decline' and
 DATEPART(MONTH, time_date) = 12 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS DecPending,

 (SELECT   count(*) FROM case_description WHERE casestatus='Approved' and
 DATEPART(MONTH, time_date) = 12 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS DecApproved,
 (SELECT   count(*) FROM case_description WHERE casestatus='Decline' and
 DATEPART(MONTH, time_date) = 12 and datepart(year,time_date)=DATEPART(year,GETDATE())) AS DecDecline,
  (SELECT AVG(t_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 12 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS DecResponse,
 (SELECT AVG(coo_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 12 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS DeccooResponse,
  (SELECT AVG(c_response) FROM dummy_table
 WHERE DATEPART(MONTH, time_date) = 12 and  DATEPART(YEAR, time_date)=DATEPART(year,GETDATE())) AS DeccResponse


");	
			$data=$case_details->result_array();
			return $data;
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

