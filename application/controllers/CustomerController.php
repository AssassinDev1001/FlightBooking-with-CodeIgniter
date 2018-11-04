<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('CustomerModel');
    }

	public function index()
	{
	}

	public function view_login($email = "", $note = "")
	{
		if($this->session->has_userdata('id') == TRUE)
			return;
		$data['email'] = $email;
		$data['note'] = $note;
		$this->load->view('header.php');
		$this->load->view('user_login.php', $data);
	}

	public function view_register($prev_param = array(), $note = "")
	{
		if($this->session->has_userdata('id') == TRUE)
			return;
		if(count($prev_param) == 0) {
			$prev_param['firstname'] = "";
			$prev_param['lastname'] = "";
			$prev_param['email'] = "";
			$prev_param['gender'] = "1";
			$prev_param['nationality'] = "";
			$prev_param['phone'] = "";
		}
		$data['param'] = $prev_param;
		$data['note'] = $note;
		$this->load->view('header.php');
		$this->load->view('user_register.php', $data);
	}

	public function customer_view()
	{
		$data['rows'] = $this->CustomerModel->get_customer_list();
		$this->load->view('header_admin.php');
		$this->load->view('customer.php', $data);
	}
	
	public function insert_customer()
	{
		$param['firstname'] = $this->input->post('firstname');
		$param['lastname'] = $this->input->post('lastname');
		$param['email'] = $this->input->post('email');
		$param['password'] = $this->input->post('password');
		$param['gender'] = $this->input->post('gender');
		$param['nationality'] = $this->input->post('nationality');
		$param['phone'] = $this->input->post('phone');

		$result = $this->CustomerModel->insert_customer($param);

		if ($result == "Success") 
			$this->view_login($param['email']);
		else
			$this->view_register($param, $result);
	}

	public function update_customer()
	{		
		$check = FALSE;
		
		$oldmail = $this->input->post('oldmail');
		$status = $this->input->post('status');
		if ($status == 'Approved') $status = 1;
		else $status = 0;

		$newdata = array(
	        'firstname' => $this->input->post('firstname'),
	        'lastname' 	=> $this->input->post('lastname'),
	        'email' 	=> $this->input->post('email'),
	        'password' 	=> $this->input->post('password'),
	        'gender'	=> $this->input->post('gender'),
	        'nationality' => $this->input->post('nationality'),
	        'phone' 	=> $this->input->post('phone'),
	        'status' 	=> $status
		);

		$result = $this->CustomerModel->update_customer($oldmail, $newdata);
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function delete_customer()
	{
		$email = $this->input->post('email');
		$result = $this->CustomerModel->delete_customer($email);
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function check_login()
	{
		$check = false;
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if($email == "admin") {
			if($password == "admin") {
				$result['id'] = "0";
				$result['firstname'] = "Administrator";
				$result['lastname'] = "";
				$this->session->set_userdata($result);
				$this->session->set_userdata("admin", "1");
				redirect("/PhotoController/index", "refresh");
				return;
			} else {
				$this->view_login($email, "Password incorrect");
				return;
			}
		}
		
		$result = $this->CustomerModel->get_customer_info_email($email);
		
		if ($result != null) 
		{
			if ($result['password'] == $password) 
			{
				$this->session->set_userdata($result);
				$this->session->set_userdata("admin", "0");
				redirect("", "refresh");
				return;
			}
			$this->view_login($email, "Password incorrect");
			return;
		} else {
			$this->view_login($email, "Email incorrect");
			return;
		}
		return;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("", "refresh");
	}


	

	public function send_mail_test()
	{
		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_port'] = 465;
		$config['smtp_user'] = 'nilsjansson2017@gmail.com';
		$config['smtp_pass'] = 'mydocument1234';
		// $config['smtp_crypto'] = 'tls';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		// $config['smtp_timeout'] = 1000;

		$this->email->initialize($config);

		// $this->email->from('nilsjansson2017@gmail.com', 'Pich Muy HaHaHa');
		$this->email->to('s.rasmey2017@yandex.com');
		// $this->email->cc('');
		$this->email->subject('Email Test');
		$this->email->message('This is the test text of email.');

		if($this->email->send())
		{
			$data['msg'] = "email sent";
		}
		else
		{
			$data['msg'] = "Email was not sent";
		}
		$this->load->view("Email Result : ".$data['msg']);
	}

}
