<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_Model extends CI_Model 
{
    public function	__construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper('date');
        $this->load->library('form_validation');
    }

    public function get_product($data){
        $this->db->select('*');
        $this->db->from('tub');
        $this->db->where($data);
        $q = $this->db->get();
        return $q->result_array();
    }
    public function getRentProduct($data){
        $this->db->select('*');
        $this->db->from('rentProducts');
        $this->db->where($data);
        $q = $this->db->get();
        return $q->result_array();
    }

}