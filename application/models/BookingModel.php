<?php
class BookingModel extends CI_Model {

    public function __construct()
    {
    	parent::__construct();
        $this->load->database();
    }
   
   	/** 
     * @param $param[***]
     *			id, key, 
	 *    		trip_id, departure_code, departure_name, departure_state_code, 
	 *   		departure_country_code, departure_country_code, departure_country_name,
	 *   		arrival_code, arrival_name, arrival_city, arrival_country_code, arrival_country_name,
	 *   		outbound_date, inbound_date, type,
	 *			cabin, adults_count, country_site_code, user_country_code, created_at
     * @return true/false
     */
    public function insert_booking_info($param)
    {
    	return $this->db->insert('booking_list', $param);
    }

	/** 
     * @param $param
     * @return true/false
     */
    public function update_booking_info($param)
    {
		$this->db->where('id', $param['id']);
		return $this->db->update('booking_list', $param);
    }

    /** 
     * @param $param['departure_code']
     * @param $param['departure_name']
     * @param $param['arrival_code']
     * @param $param['arrival_name']
     * @param $param['outbound_date']
     * @param $param['inbound_date']
     * @param $param['carbin']
     * @param $param['book_date']
     * @param $param['confirm_status']
     * @param $param['payment_status']
     * @param $param['orderby_column']
     * @param $param['orderby_direction']
     * @return
     	[{
     		id, key, 
     		trip_id, departure_code, departure_name, departure_state_code, 
     		departure_country_code, departure_country_code, departure_country_name,
     		arrival_code, arrival_name, arrival_city, arrival_country_code, arrival_country_name,
     		outbound_date, inbound_date, type,
			cabin, adults_count, country_site_code, user_country_code, created_at
     	}]
     */
    public function get_booking_info_list($param)
    {
    	if($param['departure_code'] != "")
    		$this->db->where('departure_code', $param['departure_code']);
    	if($param['departure_name'] != "")
    		$this->db->where('departure_name', $param['departure_name']);
	    if($param['arrival_code'] != "")
	    	$this->db->where('arrival_code', $param['arrival_code']);
	    if($param['outbound_date'] != "")
	    	$this->db->where('outbound_date', $param['outbound_date']);
	    if($param['inbound_date'] != "")
	    	$this->db->where('inbound_date', $param['inbound_date']);
	    if($param['carbin'] != "")
	    	$this->db->where('carbin', $param['carbin']);
	    if($param['book_date'] != "")
	    	$this->db->where('book_date', $param['book_date']);
	    if($param['confirm_status'] != "")
	    	$this->db->where('confirm_status', $param['confirm_status']);
	    if($param['payment_status'] != "")
	    	$this->db->where('payment_status', $param['payment_status']);

	    if($param['orderby_column'] != "")
	    	$this->db->order_by($param['orderby_column'], $param['orderby_direction']);
        else $this->db->order_by("id", "DESC");

	    $this->db->select('*');
	    $this->db->from('booking_list');
		$result = $this->db->get()->reuslt_array();
		return $result;
    }	
}