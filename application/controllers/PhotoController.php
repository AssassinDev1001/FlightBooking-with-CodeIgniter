<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotoController extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->model('PhotoModel');
    }

	public function index()
	{
		$photo_list =  $this->PhotoModel->get_photo_list();
		$data['photo_list'] = $photo_list;
        $this->load->view('header_admin.php');
		$this->load->view('photo.php', $data);
	}

	public function get_photo_info()
	{
		$param['id'] = $this->input->post('id');
		$result =  $this->PhotoModel->get_photo_info($param);
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function save_photo_info()
	{
		$param['id'] = $this->input->post('id');
		$param['name'] = $this->input->post('name');
		$param['price'] = $this->input->post('price');
		$result =  $this->PhotoModel->save_photo_info($param);

		$config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;
        $config['max_width'] = 2000;
        $config['max_height'] = 768;
        if($param['id'] == 1)
        	$config['file_name'] = 'background.jpg';
        else $config['file_name'] = $param['id'].'.jpg';
        
        unlink("./upload/".$config['file_name']);

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('photo'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
        }

		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}
}
