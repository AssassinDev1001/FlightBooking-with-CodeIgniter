<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('PhotoModel');
    	$this->load->model('CustomerModel');
        $this->load->library('session');
        $this->load->helper('url');
    }

	public function index()
	{
		$photo = $this->PhotoModel->get_photo_list();
		$data['photo'] = $photo;
		$this->load->view('header.php');
		$this->load->view('home.php', $data);
	}
}
