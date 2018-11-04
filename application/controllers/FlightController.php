<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FlightController extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->library('session');
    	$this->load->model('FlightModel');
    	$this->load->model('BookingModel');
        $this->load->helper('url');
    }

	public function index()
	{
		$data = $this->FlightModel->get_data();
		//log_message('error', $data[0]['name']);
		$data['photo'] = $data;
		$this->load->view('header.php');
		$this->load->view('flight.php', $data);
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
    	$result = $this->BookingModel->insert_booking_info($param);
    }

    /** 
     * @param $param
     * @return true/false
     */
    public function update_booking_info($param)
    {
		$result = $this->BookingModel->update_booking_info($param);
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
    	$result = $this->BookingModel->get_booking_info_list($param);
    }
}
