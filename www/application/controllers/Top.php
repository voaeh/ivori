<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Subscribemodel');
	}
	
	public function index()
	{
		$data['current_page'] = 'top';
		$data['content'] = 'top/index';
		$this->load->view('layout', $data);
	}
	
	public function registSubscribe()
	{
		$params = $this->input->post();
		
		$subscribe_email = $this->Subscribemodel->searchByEmail($params['email']);
		
		if (!$subscribe_email)
		{
			$databaseParams = array();
			$databaseParams['email'] = $params['email'];
			$databaseParams['create_date'] = date('Y-m-d');
			$subscribe_id = $this->Subscribemodel->insertEmail($databaseParams);
			
			if ($subscribe_id)
			{
				$data['status'] = true;
			}
			else
			{
				$data['status'] = false;
			}
		}
		else
		{
			$data['status'] = true;
		}
		
		echo json_encode($data);
		exit;
	}
}
