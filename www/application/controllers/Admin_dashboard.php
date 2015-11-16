<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	public function index()
	{
		$data['content'] = 'admin_dashboard/index';
		$this->load->view('layout_bk', $data);
	}

}
