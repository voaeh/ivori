<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'contact';
		$data['content'] = 'contact/index';
		$this->load->view('layout', $data);
	}

}
