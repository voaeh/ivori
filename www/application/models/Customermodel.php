<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customermodel extends CI_Model
{
  public $TABLE_NAME = "dtb_customer";

  function __construct()
  {
    parent::__construct();
  }

  public function insertCustomer($params)
  {
	$q = $this->db->insert($this->TABLE_NAME, $params); 
	
	$customer_id = $this->db->insert_id();
	
	return $customer_id;
  }
  
  public function searchByParams($params)
  {
	$q = $this->db;
	
		foreach($params as $key=>$value)
		{
			switch($key){
				case 'product_name':
				break;
				default:
					$q->where($key, $value);
			}
			
		}
			  
		$result = $q->order_by("customer_id", "desc")
					->get($this->TABLE_NAME)
					->result();
		return $result;
   
  }
  
  public function updateCustomer($customer_id, $params)
  {
	$q = $this->db
		  ->where('customer_id', $customer_id)
          ->update($this->TABLE_NAME,$params);
    return $q;
  }
  
}