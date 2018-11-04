<?php
class SettingModel extends CI_Model {

    public function __construct()
    {
    	parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function set_value($param)
    {
    	$this->db->where('name', $param['name']);
    	return $this->db->update('setting', array("value"=>$param['value']));
    }

    public function get_settings()
    {
        return $this->db->get('setting')->result_array();   
    }
}