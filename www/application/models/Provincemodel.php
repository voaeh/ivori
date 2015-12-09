<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provincemodel extends CI_Model
{
  public $TABLE_NAME = "dtb_province";

  function __construct()
  {
    parent::__construct();
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
		  
    $result = $q->order_by("province_id", "asc")
				->get($this->TABLE_NAME)
			    ->result();
    return $result;
  }
  
}