<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

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
		
		if ($params)
		{
			if ($params['mode'] == 'register')
			{
				$arrErr = array();
				
				$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			
				$this->form_validation->set_message('required', ' %s required.');
				$this->form_validation->set_message('max_length', '%s must not exceed 255 characters.');
				
				$this->form_validation->set_rules('reg_email', 'Email address', 'required|max_length[255]|valid_email');
				$this->form_validation->set_rules('reg_password', 'Password', 'required|min_length[8]');
		
				$databaseParams = array();
				$databaseParams['email'] = $params['reg_email'];
				$customer = $this->Customermodel->searchByParams($databaseParams);
				
				if (count($customer) > 0)
				{
					$arrErr['customer'] = 'This email address already in use.' ;
				}
				
				if ($this->form_validation->run() == TRUE && count($arrErr) == 0)
				{
					$databaseParams = array();
					$databaseParams['email'] = $params['reg_email'];
					$databaseParams['password'] = hash('sha256', $params['reg_password']);

					$customer_id = $this->Customermodel->insertCustomer($databaseParams);
					
					if ($customer_id)
					{
						$databaseParams = array();
						$databaseParams['email'] = $params['reg_email'];
						$databaseParams['password'] = hash('sha256', $params['reg_password']);
						$customer = $this->Customermodel->searchByParams($databaseParams);
						
						if ($customer)
						{
							$this->session->set_userdata('customer_id', $customer[0]->customer_id);
							$this->session->set_userdata('first_name', $customer[0]->first_name);
						}
					
						$data['success'] = 'Register successfully.';
						redirect('myaccount/detail');
					}
				}
				else
				{
					$data['arrForm'] = $params;
					$data['arrErr'] = $arrErr;
				}
				
			}
			else if ($params['mode'] == 'login')
			{
				$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			
				$this->form_validation->set_message('required', ' %s required.');
				
				$this->form_validation->set_rules('username', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('password', 'Password', 'required');
				
				if ($this->form_validation->run() == TRUE)
				{
					$databaseParams = array();
					$databaseParams['email'] = $params['username'];
					$databaseParams['password'] = hash('sha256', $params['password']);
					$customer = $this->Customermodel->searchByParams($databaseParams);
					
					if ($customer)
					{
						if (isset($params['remember']) && $params['remember'] == 1)
						{

							setcookie("customer_id", $customer[0]->customer_id, time() + (10 * 365 * 24 * 60 * 60));
							setcookie("first_name", $customer[0]->first_name, time() + (10 * 365 * 24 * 60 * 60));
						}
						
						$this->session->set_userdata('customer_id', $customer[0]->customer_id);
						$this->session->set_userdata('first_name', $customer[0]->first_name);
						redirect('myaccount/detail');
					}
					else
					{
						$arrErr['customer'] = 'Email or password is wrong.' ;
						$data['arrErr2'] = $arrErr;
					}
				}
			}
			
		}
		
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/index';
		$this->load->view('layout', $data);
	}
	
	public function lost_password()
	{
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/lost_password';
		$this->load->view('layout', $data);
	}
	
	public function register()
	{

		
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/index';
		$this->load->view('layout', $data);
	}

	public function detail()
	{
		if ($this->session->userdata('customer_id') != null)
		{
			$databaseParams = array();
			$databaseParams['customer_id'] = $this->session->userdata('customer_id');
			
			$customerData = $this->Customermodel->searchByParams($databaseParams);
			
			$data['arrForm'] = (array) reset($customerData);
		}
		
		$params = $this->input->post();
		
		
		if ($params)
		{
			$arrErr = array();
			if (isset($params['mode']) && $params['mode'] == 'update')
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
				
				if (isset($params['new_password']) && $params['new_password'] != '' )
				{
					$this->form_validation->set_rules('new_password', 'New Password', 'min_length[8]');
					$this->form_validation->set_rules('renew_password', 'Re-New Password', 'required');
					$this->form_validation->set_rules('password', 'Password', 'required');
					
					if (isset($params['renew_password']) && $params['renew_password'] != '')
					{
						if ($params['new_password'] != $params['renew_password'])
						{
							$arrErr['renew_password'] = 'Re-New Password is not match.' ;
						}
					}
					
					$databaseParams = array();
					$databaseParams['password'] = hash('sha256', $params['password']);
					$oldPassword = $this->Customermodel->searchByParams($databaseParams);
					
					if (!$oldPassword)
					{
						$arrErr['password'] = 'Invalid password.' ;
					}
				}
	
				if ($this->form_validation->run() == TRUE && count($arrErr) == 0)
				{
					$databaseParams = array();
					$databaseParams['first_name'] = $params['first_name'];
					$databaseParams['last_name'] = $params['last_name'];
					$databaseParams['company_name'] = $params['company_name'];
					$databaseParams['tel'] = $params['tel'];
					$databaseParams['zip'] = $params['zip'];
					$databaseParams['country'] = $params['country'];
					$databaseParams['province'] = $params['province'];
					$databaseParams['address1'] = $params['address1'];
					$databaseParams['address2'] = $params['address2'];
					$databaseParams['update_date'] = date('Y-m-d H:i:s');
					
					if (isset($params['new_password']) && $params['new_password'] != '')
					{
						$databaseParams['password'] = hash('sha256', $params['new_password']);		
					}
					
					$result = $this->Customermodel->updateCustomer($this->session->userdata('customer_id'), $databaseParams);
						
					if ($result)
					{
						$data['success'] = 'Update successfully.';
					}
					else
					{
						$data['error'] = 'An error has occurred.' ;
					}
					
					$databaseParams = array();
					$databaseParams['customer_id'] = $this->session->userdata('customer_id');
					
					$customerData = $this->Customermodel->searchByParams($databaseParams);
					
					$data['arrForm'] = (array) reset($customerData);
				}
				else
				{
					$data['arrForm'] = $params;
				}
				
				if (count($arrErr) > 0)
				{
					$data['arrErr'] = $arrErr;
					$data['arrForm'] = $params;
				}
			}
		}
		
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/detail';
		$this->load->view('layout', $data);
	}
	
	public function login()
	{
		$params = $this->input->post();
		
		if ($params)
		{
				$databaseParams = array();
				$databaseParams['email'] = $params['email'];
				$databaseParams['password'] = hash('sha256', $params['password']);
				$customer = $this->Customermodel->searchByParams($databaseParams);
					
				if ($customer)
				{
					if (isset($params['remember']) && $params['remember'] == 1)
					{

						setcookie("customer_id", $customer[0]->customer_id, time() + (10 * 365 * 24 * 60 * 60));
						setcookie("first_name", $customer[0]->first_name, time() + (10 * 365 * 24 * 60 * 60));
					}
						
					$this->session->set_userdata('customer_id', $customer[0]->customer_id);
					$this->session->set_userdata('first_name', $customer[0]->first_name);
					
					$data['status'] = true;
					
				}
				else
				{
					$data['status'] = false;
					$data['message'] = 'Email or password is wrong.' ;
				}
				
				echo json_encode($data);
				exit;
		}
	}
	
	public function logout() 
	{
		$this->session->unset_userdata('customer_id');
		$this->session->unset_userdata('first_name');
		
		$params = $this->input->get();
		
		if (strpos($params['return_url'],"myaccount") > -1)
		{
			redirect("top/index");
		}
		else
		{
			redirect($params['return_url']);
		}
	}

}
