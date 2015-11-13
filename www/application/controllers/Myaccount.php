<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/index';
		$this->load->view('layout', $data);
	}
	
	public function lost_password()
	{
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/lost_password';
		$this->load->view('layout', $data);
	}

}
