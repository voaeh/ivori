<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

	public function __construct()
	{
		if (isset($_COOKIE['customer_id']) && $_COOKIE['customer_id'] != '')
		{
			$this->session->set_userdata('customer_id', $_COOKIE['customer_id']);
		}
		
		if (isset($_COOKIE['first_name']) && $_COOKIE['first_name'] != '')
		{
			$this->session->set_userdata('first_name', $_COOKIE['first_name']);
		}
		
	}

}
