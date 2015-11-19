<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Productmodel');
		
	}
	
	public function index()
	{
		$productList = $this->Productmodel->searchByParams(array());
		
		$data['productList'] = $productList;
		$data['current_page'] = 'shop';
		$data['content'] = 'shop/index';
		$this->load->view('layout', $data);
	}

}
