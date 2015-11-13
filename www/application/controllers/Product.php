<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'product';
		$data['content'] = 'product/index';
		$this->load->view('layout', $data);
	}

}
