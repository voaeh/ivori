<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_product extends CI_Controller {

	public function index()
	{
		$data['content'] = 'admin_product/index';
		$this->load->view('layout_bk', $data);
	}

}
