<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	public function index()
	{
		$data['current_page'] = 'top';
		$data['content'] = 'top/index';
		$this->load->view('layout', $data);
	}
}
