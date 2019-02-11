
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class Service_Category_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Service_Category_Model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$service_category['user_full_name'] = $session_data['user_full_name'];
			$service_category['email'] = $session_data['user_email'];
			$service_category['password'] = $session_data['password'];
			$service_category['user_role'] = $session_data['user_role'];
			$this->load->view('Service Category', $service_category);
		} else {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}




	public function summary_index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$service_category['user_full_name'] = $session_data['user_full_name'];
			$service_category['email'] = $session_data['user_email'];
			$service_category['password'] = $session_data['password'];
			$service_category['user_role'] = $session_data['user_role'];

			$service_category['weekly_summary']=$this->weekly_summary($service_category['email']);

			$this->load->view('lunch summary', $service_category);
		} else {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}




	public function summary_index_after_taking_range()
	{
		$start_date=$this->input->post('start_date');
		$end_date=$this->input->post('end_date');
		//var_dump($start_date); die;

		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$service['user_full_name'] = $session_data['user_full_name'];
			$service['email'] = $session_data['user_email'];
			$service['password'] = $session_data['password'];
			$service['user_role'] = $session_data['user_role'];


			$service['weekly_summary']=$this->range_summary($start_date,$end_date);

			//var_dump($service['weekly_summary']); die;

			redirect('range_summary');

			//var_dump($service['weekly_summary']); die;

			 //$this->load->view('lunch summary', $service);
		} else {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}


	public function range_summary()
	{
		//$defaut=$this->input->post('start_date');

		$start_date=$this->input->post('from_date');
		$end_date=$this->input->post('to_date');

//var_dump($start_date);die;
		$query = $this->db->query("select DATENAME(WEEKDAY,order_date)'order_date', your_order,user_full_name
		from lunch inner join users on lunch.user_email=users.user_email
		where
		lunch.delete_flag='N' and
		((DATEPART(dw, order_date) + @@DATEFIRST) % 7) NOT IN (0, 1) and
		lunch.order_date between '$start_date' and '$end_date'
		order by order_date  asc");
		$weekly_summary = $query->result();

		$output = '';
		$output .=
			'<table class="table table-bordered">
			<tr>
				<th width="5%">order_date</th>
				<th width="30%">your_order</th>
				<th width="43%">user_full_name</th>
				<th width="43%">action</th>
			 </tr> ';

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
                          <td>'. $record->order_date .'</td>
                          <td>'. $record->your_order .'</td>
                          <td>'. $record->user_full_name .'</td>
                          <td>
                        <center>
                            <button class="editorder btn  btn-info"
                                    style = "text-transform: capitalize;  background-color: goldenrod;
                                                         border-color: goldenrod; width:40px"  type="button" id="fetchinfo"
                                    data-toggle="modal" data-target="#EditMonday"
                                    data-order_date="<?php echo $record->order_date;?>"
                                    data-id="<?php echo $record->your_order;?>"
                                    data-your_order="<?php echo $record->user_full_name;?>"  >
                                <i class = "icon icon-info"></i>
                            </button>
                            <button class="deleteorder btn  btn-warning"
                                    style = "text-transform: capitalize;  background-color: maroon;
                                                         border-color: maroon; width:40px"  type="button"
                                    data-toggle="modal" data-target="#deleteOrder"
                                    data-your_date="<?php echo $record->order_date;?>"
                                    data-id="<?php echo $record->your_order;?>"
                                    data-your_order="<?php echo $record->user_full_name;?>" >
                                <i class = "icon icon-trash">
                                </i>
                            </button>
                        </center>
                    </td>
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




	public function weekly_summary()
	{
		$query = $this->db->query("select (order_date)'order_date', your_order,user_full_name
from lunch inner join users on lunch.user_email=users.user_email
where
  lunch.delete_flag='N' and
 ((DATEPART(dw, order_date) + @@DATEFIRST) % 7) NOT IN (0, 1)
 order by order_date  asc");
		$weekly_summary = $query->result();
		return $weekly_summary;
	}

















	public function add_your_order()
	{

		$order_date=$this->input->post('order_date');
		$email=$this->input->post('user_email');
		$data = array(
			'user_email' =>$email,
			'order_date' => $order_date,
			'your_order' => $this->input->post('your_order'),
			'delete_flag' => 'N'
		);


		$query= $this->db->query
		("select * from lunch where order_date='$order_date' and user_email='$email'");
		$your_orders= $query->num_rows();
		if ($your_orders >= 1) {
			$result=1;
			echo $result;
		    //var_dump($your_orders); die;
		}
		else{
			//var_dump($data); die;
			$this->db->insert('lunch', $data);
			$result=0;
			echo $result;
			//redirect('case');
		}

	}




//	public function add_your()
//	{
//		$email = $this->input->post("email");
//		//var_dump($email); die;
//		$data = array(
//			'Monday' => $this->input->post('Monday'),
//			'Tuesday' => $this->input->post('Tuesday'),
//			'Wednesday' => $this->input->post('Wednesday'),
//			'Thursday' => $this->input->post('Thursday'),
//			'Friday' => $this->input->post('Friday')
//		);
//		//var_dump($data); die;
//		$this->db->set($data);
//		$this->db->where('user_email', $email);
//		$this->db->update("lunchtable", $data);
//		$result = 1;
//		echo $result;
//			redirect('ServiceCategory');
	//}

	public function update_order()
	{

		$id = $this->input->post("iddateOrder");
		//var_dump($email); die;
		$data = array(
			'your_order' => $this->input->post('EditOrderOrder'),
		);
		//var_dump($data); die;
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update("lunch", $data);
		$result = 1;
		//echo $result;
	redirect('case');
	}

	public function delete()
	{
		$id = $this->input->post("iddateOrder_delete");
		//var_dump($email); die;
		$data = array(
			'delete_flag' => Y,
		);
		//var_dump($data); die;
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update("lunch", $data);
		$result = 1;
		//echo $result;
		redirect('case');
	}







	public function validate_service_category_name($service_category)
	{
		$query = $this->db->query("select * from service_category where service_category_name='$service_category' ");
		$result = $query->num_rows();
		if ($result >= 1) {
			return 1;
		} else {
			return 0;
		}
	}




	public function update()
	{
		$id = $this->input->post("id");
		//var_dump($id); die;
		$data = array('service_category_name' => $this->input->post('service_category_name'));
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update("service_category", $data);
		redirect('ServiceCategory');
	}


	public function change_password()
	{
		$password = $this->input->post("password");
		$new_pass = $this->input->post("new_pass");
		$new_pass_confirm = $this->input->post("new_pass_confirm");
		$user_email = $this->input->post("user_email");

		$pass = hash('sha512', $password);
		//var_dump($user_email); die;
		$result = $this->validate_old_password($pass, $user_email);
		//var_dump($result); die();
		if ($result == '1') {
			if ($new_pass == $new_pass_confirm) {

				$data = array('password' => hash('sha512', $new_pass));
				$this->db->set($data);
				$this->db->where('user_email', $user_email);
				$this->db->update("users", $data);

				echo $result;
			} else {
				//return 2;
				$result = 2;
				echo $result;
			}

		} else {
			echo $result;
		}


	}






	public function validate_old_password($pass, $user_email)
	{
		$query = $this->db->query("select password from users where password='$pass' and user_email='$user_email' ");
		$result = $query->num_rows();
		if ($result >= 1) {
			return 1;
		} else {
			return 0;
		}
	}






	public function compare_password($new_pass, $new_pass_confirm)
	{

		if ($new_pass == $new_pass_confirm) {

			return 1;
		} else {
			return 2;
		}
	}








	public function select_description()
	{
		$transaction_id = $this->input->post("transaction_id");

		$query_description = $this->db->query("select descriptions,convert(varchar(19),time_date,120) as time_date from case_description where case_description.transaction_id='$transaction_id'");
		$data = $query_description->result_array();
		echo json_encode($data);

	}

}

 //convert(varchar(19),time_date,120) as time_date
