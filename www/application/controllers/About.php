<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'about us';
		$data['content'] = 'about/index';
		$this->load->view('layout', $data);
	}

}
