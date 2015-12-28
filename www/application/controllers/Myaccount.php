<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	protected $message1 = '';
	protected $message2 = '';
	protected $message3 = '';
	protected $message4 = '';
	protected $error1 = '';
	protected $error2 = '';
	protected $error3 = '';
	protected $error4 = '';
	protected $error5 = '';
	protected $error6 = '';
	protected $error7 = '';
	protected $error8 = '';
	protected $error9 = '';
	protected $error10 = '';
	protected $error11 = '';
	protected $success1 = '';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Customermodel');
		$this->load->model('Provincemodel');
		
		$lang = get_lang();
		
		if ($lang == 'en')
		{
			$this->message1 = 'required.';
			$this->message2 = 'must not exceed 255 characters.';
			$this->message3 = 'must contain at least 8 characters.';
			$this->message4 = 'contains an invalid format.';
			
			$this->error1 = 'This email address already in use.';
			$this->error2 = 'Register successfully.';
			$this->error3 = 'Email or password is wrong.';
			$this->error4 = 'Send email successfully.';
			$this->error5 = 'This email address does not exist in the system.';
			$this->error6 = 'Please enter the re-new password again.';
			$this->error7 = 'An error has occurred.';
			$this->error8 = 'Password reset successfully.';
			$this->error9 = 'Please reset your password.';
			$this->error10 = 'You can set a new password for this link.';
			$this->error11 = 'Invalid password.';
			$this->success1 = 'Update successfully.';
			
			
		}
		else
		{
			$this->message1 = 'ต้องการ';
			$this->message2 = 'ต้องไม่เกิน 255 ตัวอักษร';
			$this->message3 = 'ต้องมีอย่างน้อย 8 ตัวอักษร';
			$this->message4 = 'มีรูปแบบที่ไม่ถูกต้อง';
			
			$this->error1 = 'อีเมล์นี้ใช้ลงทะเบียนแล้ว';
			$this->error2 = 'ลงทะเบียนสำเร็จ';
			$this->error3 = 'อีเมล์ หรือ รหัสผ่าน ไม่ถูกต้อง';
			$this->error4 = 'ส่งอีเมล์เรียบร้อยแล้ว';
			$this->error5 = 'ไม่มีอีเมล์นี้ในระบบ';
			$this->error6 = 'กรุณาใส่ยืนยันรหัสผ่านอีกครั้ง';
			$this->error7 = 'เกิดข้อผิดพลาดขึ้น';
			$this->error8 = 'เปลี่ยนรหัสผ่านสำเร็จ';
			$this->error9 = 'กรุณาเปลี่ยนรหัสผ่านใหม่';
			$this->error10 = 'คุณสามารถเปลี่ยนรหัสผ่านได้ที่ link นี้';
			$this->error11 = 'รหัสผ่านไม่ถูกต้อง';
			$this->success1 = 'แก้ไข้เรียบร้อยแล้ว';
		}
		
		$this->form_validation->set_message('required', ' %s '.$this->message1);
		$this->form_validation->set_message('max_length', '%s '.$this->message2);
		$this->form_validation->set_message('min_length', '%s '.$this->message3);
		$this->form_validation->set_message('valid_email', '%s '.$this->message4);
		
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
				
				$this->form_validation->set_rules('reg_email', $this->lang->line('my_email'), 'required|max_length[255]|valid_email');
				$this->form_validation->set_rules('reg_password',$this->lang->line('my_password'), 'required|min_length[8]');
		
				$databaseParams = array();
				$databaseParams['email'] = $params['reg_email'];
				$customer = $this->Customermodel->searchByParams($databaseParams);
				
				if (count($customer) > 0)
				{
					$arrErr['customer'] = $this->error1 ;
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
					
						$data['success'] = $this->error2;
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
				
				$this->form_validation->set_rules('username', $this->lang->line('my_email'), 'required|valid_email');
				$this->form_validation->set_rules('password', $this->lang->line('my_password'), 'required');
				
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
						$arrErr['customer'] = $this->error3;
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
		$params = $this->input->post();
		
		if ($params)
		{
			$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
				
			$this->form_validation->set_rules('email', $this->lang->line('my_email'), 'required|max_length[255]|valid_email');
			
			if ($this->form_validation->run() == TRUE)
			{
				$databaseParams = array();
				$databaseParams['email'] = $params['email'];
				$customer = $this->Customermodel->searchByParams($databaseParams);
				
				if ($customer)
				{
					$subject = $this->error9;
					$body = $this->error10."<br>";
					$url = site_url("myaccount/reset_password")."?id1=".$customer[0]->customer_id."&id2=".$customer[0]->password;
					$body .= "<a href='".$url."'>".$url."</a>";
					
					$this->email->from('no-reply@ivori.co.th', 'no-reply@ivori.co.th');
					$this->email->to($params['email']); 

					$this->email->subject($subject);
					$this->email->message($body);	

					$this->email->send();
					
					$data['success'] = $this->error4;
				}
				else
				{
					$data['error'] = $this->error5 ;
				}
			
			}
		}
		
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/lost_password';
		$this->load->view('layout', $data);
	}
	
	public function reset_password()
	{
		$get = $this->input->get();
		
		$params = $this->input->post();
		
		if ($params)
		{
			$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			
			$this->form_validation->set_rules('new_password', $this->lang->line('my_new_password'), 'required|min_length[8]');
			$this->form_validation->set_rules('renew_password', $this->lang->line('my_renew_password'), 'required|min_length[8]');


			if ($params['new_password'] != $params['renew_password'])
			{
				$data['error'] = $this->error6;
			}
			
			if ($this->form_validation->run() == TRUE && !isset($data['error']))
			{
				
				if ($get)
				{
					$databaseParams = array();
					$databaseParams['customer_id'] = $get['id1'];
					$databaseParams['password'] =  $get['id2'];
					$customer = $this->Customermodel->searchByParams($databaseParams);
					
					if (count($customer) == 0)
					{
						$data['error'] = $this->error7;
					}
					else
					{
						$databaseParams = array();
						$databaseParams['password'] =  hash('sha256', $params['new_password']);
						$result = $this->Customermodel->updateCustomer($get['id1'], $databaseParams);
						
						if ($result)
						{
							$data['success'] = $this->error8;
						}
						else
						{
							$data['error'] = $this->error7;
						}
					}
				}
				else
				{
					$data['error'] = $this->error7;
					
				}
			}
		}
		
		$data['current_page'] = 'My Account';
		$data['content'] = 'my-account/reset_password';
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
		$provinceList = $this->Provincemodel->searchByParams(array());
		
		$data['provinceList'] = $provinceList;
		
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
				
				$this->form_validation->set_rules('first_name', $this->lang->line('my_firstname') ,'required|max_length[255]');
				$this->form_validation->set_rules('last_name', $this->lang->line('my_lastname'), 'required|max_length[255]');
				$this->form_validation->set_rules('tel', $this->lang->line('my_phone'), 'required');
				$this->form_validation->set_rules('country', $this->lang->line('my_country'), 'required');
				$this->form_validation->set_rules('address1', $this->lang->line('my_address1'), 'required');
				$this->form_validation->set_rules('province', $this->lang->line('my_province'), 'required');
				$this->form_validation->set_rules('zip', $this->lang->line('my_zip'), 'required');
				
				if (isset($params['new_password']) && $params['new_password'] != '' )
				{
					$this->form_validation->set_rules('new_password', $this->lang->line('my_new_password'), 'min_length[8]');
					$this->form_validation->set_rules('renew_password', $this->lang->line('my_renew_password'), 'required');
					$this->form_validation->set_rules('password', $this->lang->line('my_password'), 'required');
					
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
						$arrErr['password'] = $this->error11 ;
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
						$data['success'] = $this->success1;
					}
					else
					{
						$data['error'] = $this->error7;
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
					$data['message'] = $this->error3 ;
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
