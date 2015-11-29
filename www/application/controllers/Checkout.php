<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Customermodel');
		$this->load->model('Ordermodel');
		$this->load->model('Orderdetailmodel');
	}
	
	public function index()
	{
		if (!empty($this->session->userdata('cart')))
		{
			$cart = $this->session->userdata('cart');
			
			$total = 0;
			foreach($cart as $val)
			{
				$total += $val['subtotal'];
			}
			
			$data['total'] = $total;
		}
		
		if (!empty($this->session->userdata('customer_id')))
		{
			$databaseParams = array();
			$databaseParams['customer_id'] = $this->session->userdata('customer_id');
			$customer = $this->Customermodel->searchByParams($databaseParams);
		}
		
		$params = $this->input->post();
		
		if ($params)
		{
			if ($params['mode'] == 'insert')
			{
				$this->form_validation->set_error_delimiters('<br><span class="red">', '</span><br>');
			
				$this->form_validation->set_message('required', ' %s required.');
				$this->form_validation->set_message('max_length', '%s must not exceed 255 characters.');
				
				$this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[255]');
				$this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[255]');
				$this->form_validation->set_rules('tel', 'Phone', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
				$this->form_validation->set_rules('address1', 'Address', 'required');
				$this->form_validation->set_rules('province', 'Province', 'required');
				$this->form_validation->set_rules('zip', 'Postcode / Zip', 'required');
				$this->form_validation->set_rules('email', 'Email address', 'required|max_length[255]|valid_email');
				
				if ($this->form_validation->run() == TRUE)
				{
					$databaseParams = array();
					
					if (!empty($this->session->userdata('customer_id'))) {
						$databaseParams['customer_id'] = $this->session->userdata('customer_id');
					}
					
					$databaseParams['first_name'] = $params['first_name'];
					$databaseParams['last_name'] = $params['last_name'];
					$databaseParams['tel'] = $params['tel'];
					$databaseParams['country'] = $params['country'];
					$databaseParams['company_name'] = $params['company_name'];
					$databaseParams['province'] = $params['province'];
					$databaseParams['address1'] = $params['address1'];
					$databaseParams['address2'] = $params['address2'];
					$databaseParams['zip'] = $params['zip'];
					$databaseParams['email'] = $params['email'];
					$databaseParams['payment_type'] = $params['payment_type'];
					$databaseParams['comment'] = $params['comment'];
					$databaseParams['deliv_total'] = 0;
					$databaseParams['total'] = $data['total'];
					$databaseParams['create_date'] = date('Y-m-d H:i:s');
					$databaseParams['update_date'] = date('Y-m-d H:i:s');
					
					$order_id = $this->Ordermodel->insertOrder($databaseParams);
					
					if ($order_id)
					{
						$cart = $this->session->userdata('cart');
						
						foreach($cart as $val)
						{
							$databaseParams = array();
							$databaseParams['order_id'] = $order_id;
							$databaseParams['product_id'] = $val['product_id'];
							$databaseParams['quantity'] = $val['quantity'];
							$databaseParams['subtotal'] = $val['subtotal'];
							
							$orderDetail = $this->Orderdetailmodel->insertOrder($databaseParams);
						}
						
						redirect('checkout/complete');
					}
					else
					{
						$data['error'] = 'An error has occurred.';
					}
				}
			}
		}
		
				
		$data['current_page'] = 'check out';
		$data['content'] = 'checkout/index';
		$this->load->view('layout', $data);
	}
	
	public function complete()
	{
		$data['current_page'] = 'check out';
		$data['content'] = 'checkout/complete';
		$this->load->view('layout', $data);
	}

}
