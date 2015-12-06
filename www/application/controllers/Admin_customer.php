<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Customermodel');
		
	}
	
	public function index()
	{
		$params = $this->input->post();
		
		$databaseParams = array();
		
		if (isset($params['name']))
		{
			$databaseParams['name'] = $params['name'];
		}
		
		$customerList = $this->Customermodel->searchByParams($databaseParams);
		
		$data['customerList'] = $customerList;
		
		$data['content'] = 'admin_customer/index';
		$this->load->view('layout_bk', $data);
	}
	
	public function detail()
	{
		$params = $this->input->post();
		
		$databaseParams = array();
		$databaseParams['customer_id'] = $params['customer_id'];
		
		$customerList = $this->Customermodel->searchByParams($databaseParams);
		
		$data['customerList'] = $customerList;
		
		$data['content'] = 'admin_customer/detail';
		$this->load->view('layout_bk', $data);
	}

}
