<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'shop';
		$data['content'] = 'shop/index';
		$this->load->view('layout', $data);
	}
}
