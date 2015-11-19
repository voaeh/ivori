<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscribemodel extends CI_Model
{
  public $TABLE_NAME = "dtb_subscribe";

  function __construct()
  {
    parent::__construct();
  }

  public function insertEmail($params)
  {
	$q = $this->db->insert($this->TABLE_NAME, $params); 
	
	$subscribe_id = $this->db->insert_id();
	
	return $subscribe_id;
  }
  
  public function searchByEmail($email)
  {
	
    $q = $this->db
		  ->where('email', $email)
          ->get($this->TABLE_NAME)
          ->result();
    return $q;
  }
}