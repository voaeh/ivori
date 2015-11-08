<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	public function index()
	{
		$data['content'] = 'top/index';
		$this->load->view('layout', $data);
	}
}
