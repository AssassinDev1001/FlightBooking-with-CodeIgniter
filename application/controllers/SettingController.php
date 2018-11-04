<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingController extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('SettingModel');
    }

	public function index()
	{
        $setting_list = $this->SettingModel->get_settings();
        $setting_map = array();
        foreach ($setting_list as $key => $row) {
            $setting_map[$row['name']] = $row['value'];
        }
        $data['setting'] = $setting_map;
        $this->load->view('header_admin.php');
		$this->load->view('setting.php', $data);
	}

    public function set_value()
    {
        $param['name'] = $this->input->post('name');
        $param['value'] = $this->input->post('value');
        $result =  $this->SettingModel->set_value($param);
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

    public function backup_database()
    {   
		$this->load->dbutil();	

        $prefs = array(     
                'format'      => 'zip',             
                'filename'    => 'booking.sql'

            );
        $backup =& $this->dbutil->backup($prefs); 
        $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = '/upload/_tmp/'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup); 
        $this->load->helper('download');
        force_download($db_name, $backup); 
    }
}
