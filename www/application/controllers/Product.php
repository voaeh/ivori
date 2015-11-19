<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Productmodel');
		
	}
	
	public function index()
	{
		//get params
		$params = $this->uri->uri_to_assoc(3);
		
		$product_id = $params['id'];
		
		if ($product_id)
		{
			$databaseParams = array(); 
			$databaseParams['product_id'] = $product_id;
			$productList = $this->Productmodel->searchByParams($databaseParams);
				
			$product = reset($productList);
			
			$data['product'] = $product;
		}
	
		$data['current_page'] = 'product';
		$data['content'] = 'product/index';
		$this->load->view('layout', $data);
	}

}
