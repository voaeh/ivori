<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Ordermodel');
		$this->load->model('Orderdetailmodel');
	}
	
	public function index()
	{
		$params = $this->input->post();
		
		$databaseParams = array();
		
		if (isset($params['order_id']))
		{
			$databaseParams['order_id'] = $params['order_id'];
		}
		
		$orderList = $this->Ordermodel->searchByParams($databaseParams);
		
		$data['orderList'] = $orderList;
		
		$data['content'] = 'admin_order/index';
		$this->load->view('layout_bk', $data);
	}
	
	public function detail()
	{
		$params = $this->input->post();
		
		if ($params)
		{
			$databaseParams = array();
			$databaseParams['order_id'] = $params['order_id'];
			
			$orderList = $this->Ordermodel->searchByParams($databaseParams);
			
			$databaseParams = array();
			$databaseParams['order_id'] = $params['order_id'];
			
			$orderDetailList = $this->Orderdetailmodel->searchByParams($databaseParams);
			
			$data['orderList'] = $orderList;
			$data['orderDetailList'] = $orderDetailList;
		}
		
		$data['content'] = 'admin_order/detail';
		$this->load->view('layout_bk', $data);
	}

}
