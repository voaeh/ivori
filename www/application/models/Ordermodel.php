<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ordermodel extends CI_Model
{
  public $TABLE_NAME = "dtb_order";

  function __construct()
  {
    parent::__construct();
  }

  public function insertOrder($params)
  {
	$q = $this->db->insert($this->TABLE_NAME, $params); 
	
	$order_id = $this->db->insert_id();
	
	return $order_id;
  }
  
}