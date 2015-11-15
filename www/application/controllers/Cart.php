<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'cart';
		$data['content'] = 'cart/index';
		$this->load->view('layout', $data);
	}

}
