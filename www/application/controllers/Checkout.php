<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'check out';
		$data['content'] = 'checkout/index';
		$this->load->view('layout', $data);
	}

}
