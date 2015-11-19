<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productmodel extends CI_Model
{
  public $TABLE_NAME = "dtb_product";

  function __construct()
  {
    parent::__construct();
  }

  public function insertProduct($params)
  {
	$q = $this->db->insert($this->TABLE_NAME, $params); 
	
	$product_id = $this->db->insert_id();
	
	return $product_id;
  }
  
  public function searchByParams($params)
  {
	
    $q = $this->db;
	
	foreach($params as $key=>$value)
	{
		switch($key){
			case 'product_name':
				$q->like('product_name_en', $value);
				$q->or_like('product_name_th', $value);
			break;
			default:
				$q->where($key, $value);
		}
		
	}
		  
    $result = $q->order_by("product_id", "desc")
				->get($this->TABLE_NAME)
			    ->result();
    return $result;
  }
  
  public function updateProduct($product_id, $params)
  {
	$q = $this->db
		  ->where('product_id', $product_id)
          ->update($this->TABLE_NAME,$params);
    return $q;
  }
  
}