<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('BookingModel');
    }

	public function index()
	{
        $param = new array();
		$photo_list =  $this->BookingModel->get_booking_info_list($param);
		$data['photo_list'] = $photo_list;
        $this->load->view('header.php');
		$this->load->view('photo.php', $data);
	}
}
