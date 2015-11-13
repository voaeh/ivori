<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'blog';
		$data['content'] = 'blog/index';
		$this->load->view('layout', $data);
	}

}
