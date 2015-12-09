<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	protected $message1 = '';
	protected $message2 = '';
	protected $message3 = '';
	protected $message4 = '';
	protected $error7 = '';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Customermodel');
		$this->load->model('Ordermodel');
		$this->load->model('Orderdetailmodel');
		$this->load->model('Provincemodel');
		$this->load->library('email');
		
		$lang = get_lang();
		
		if ($lang == 'en')
		{
			$this->message1 = 'required.';
			$this->message2 = 'must not exceed 255 characters.';
			$this->message3 = 'must contain at least 8 characters.';
			$this->message4 = 'contains an invalid format.';
			
			$this->error7 = 'An error has occurred.';
			
			
		}
		else if ($lang == 'th')
		{
			$this->message1 = 'ต้องการ';
			$this->message2 = 'ต้องไม่เกิน 255 ตัวอักษร';
			$this->message3 = 'ต้องมีอย่างน้อย 8 ตัวอักษร';
			$this->message4 = 'มีรูปแบบที่ไม่ถูกต้อง';

			$this->error7 = 'เกิดข้อผิดพลาดขึ้น';
		}
		
		$this->form_validation->set_message('required', ' %s '.$this->message1);
		$this->form_validation->set_message('max_length', '%s '.$this->message2);
		$this->form_validation->set_message('min_length', '%s '.$this->message3);
		$this->form_validation->set_message('valid_email', '%s '.$this->message4);
	}
	
	public function index()
	{
		$provinceList = $this->Provincemodel->searchByParams(array());
		
		$data['provinceList'] = $provinceList;
		
		if ($this->session->userdata('cart') != null)
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
			$data['arrForm'] = (array) reset($customer);
		}
		
		$params = $this->input->post();
		
		if ($params)
		{
			if ($params['mode'] == 'insert')
			{
				$this->form_validation->set_error_delimiters('<br><span class="red">', '</span><br>');
				
				$this->form_validation->set_rules('first_name', $this->lang->line('my_firstname') ,'required|max_length[255]');
				$this->form_validation->set_rules('last_name', $this->lang->line('my_lastname'), 'required|max_length[255]');
				$this->form_validation->set_rules('tel', $this->lang->line('my_phone'), 'required');
				$this->form_validation->set_rules('country', $this->lang->line('my_country'), 'required');
				$this->form_validation->set_rules('address1', $this->lang->line('my_address1'), 'required');
				$this->form_validation->set_rules('province', $this->lang->line('my_province'), 'required');
				$this->form_validation->set_rules('zip', $this->lang->line('my_zip'), 'required');
				$this->form_validation->set_rules('email', $this->lang->line('my_email'), 'required|max_length[255]|valid_email');
				
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
						
						$subject = "มี order มาใหม่";
						$body = $params['first_name']." ".$params['last_name']."<br>";
						$body .= "เบอร์โทร ".$params['tel']."<br>";
						$body .= "ที่อยู่ ".$params['address1']."<br>";
						$body .= $params['address2']."<br>";
						$body .= $params['province']."<br>";
						$body .= $params['country']."<br>";
						$body .= $params['zip']."<br>";
						$body .=  "เลขที่ order = ".$order_id;
						
						$this->email->from('admin@ivori.com', 'Admin Ivori');
						$this->email->to('voaeh@hotmail.com'); 

						$this->email->subject($subject);
						$this->email->message($body);	

						$this->email->send();
						
						redirect('checkout/complete');
					}
					else
					{
						$data['error'] = $this->error7;
					}
				}
				else
				{
					$data['arrForm'] = $params;
				}
			}
		}
		
				
		$data['current_page'] = 'check out';
		$data['content'] = 'checkout/index';
		$this->load->view('layout', $data);
	}
	
	public function complete()
	{
		$this->session->unset_userdata('cart');
		
		$data['current_page'] = 'check out';
		$data['content'] = 'checkout/complete';
		$this->load->view('layout', $data);
	}

}
