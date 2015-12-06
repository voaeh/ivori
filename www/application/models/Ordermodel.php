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
  
  public function searchByParams($params)
  {
	$q = $this->db;
	
	foreach($params as $key=>$value)
	{
		switch($key){
			case 'name':
			break;
			default:
				$q->where($key, $value);
		}
		
	}
		
	$result = $q->order_by("order_id", "desc")
				->get($this->TABLE_NAME)
				->result();
	return $result;
   
  }
  
}