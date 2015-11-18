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
  
}