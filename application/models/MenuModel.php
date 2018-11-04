<?php
class PhotoModel extends CI_Model {

    public function __construct()
    {
    	parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function get_photo_list()
    {
    	return $this->db->get('photo')->result_array();
    }

    public function get_photo_info($param)
    {
    	$this->db->where('id', $param['id']);
    	return $this->db->get('photo')->row_array();
    }

    public function save_photo_info($param)
    {
    	$this->db->where('id', $param['id']);
    	if($param['name'] == "Background")
    	{
    		$param['comment'] = $param['price'];
    		$param['price'] = 0;
    	}
    	return $this->db->update('photo', $param);
    }
}