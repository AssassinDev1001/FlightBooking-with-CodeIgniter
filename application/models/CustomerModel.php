<?php
class CustomerModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function is_customer_exist($email)
	{
		if($email == "admin")
			return TRUE;
		$custom_info = $this->get_customer_info_email($email);
		if(count($custom_info) == null) 
			return FALSE;
		else return TRUE;
	}

	public function insert_customer($param)
	{
		if($this->is_customer_exist($param['email']) == TRUE)
		{	
			return "There alreay exists a user with the email address.";
		}
		$result = $this->db->insert('customer', $param);
		if($result == TRUE)
			return "Success";
		return "Failed";
	}

	public function update_customer($oldmail, $data)
	{
		$this->db->where('email', $oldmail);
		$result = $this->db->update('customer', $data);
		return $result;
	}

	public function delete_customer($email) 
	{
		$this->db->where('email', $email);
		return $this->db->delete('customer');
	}

	public function get_customer_info_email($email)
	{
		$result = $this->db->get_where('customer', array('email'=> $email))->result_array();
		if(count($result) > 0)
			return $result[0];
		return null;
	}

	public function get_customer_list()
	{
		return $this->db->get('customer')->result_array();
	}

	
}