<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Productmodel');
		
	}
	
	public function index()
	{
		if ($this->session->userdata('cart') != null)
		{
			$cart = $this->session->userdata('cart');
			
			$total = 0;
			foreach($cart as $key=>$val)
			{
				$databaseParams = array();
				$databaseParams['product_id'] = $val['product_id'];
				$product = $this->Productmodel->searchByParams($databaseParams);
				
				if ($product)
				{
					$lang = get_lang();

					$product_name = "product_name_".$lang;
					
					$cart[$key]['product_name'] = $product[0]->$product_name;
					$cart[$key]['price'] = $product[0]->price;
					$cart[$key]['main_image'] = $product[0]->main_image;
					
					$subtotal = $val['quantity'] * $cart[$key]['price'];
					
					$cart[$key]['subtotal'] = $subtotal;
					
					$total += $subtotal;
				}
				
			}

			$data['cart'] = $cart;
			$data['total'] = $total;
		}
		
		$data['current_page'] = 'cart';
		$data['content'] = 'cart/index';
		$this->load->view('layout', $data);
	}
	
	public function addCart()
	{
		$params = $this->input->post();
		
		$lang = get_lang();
		
		if ($params)
		{
			if (isset($params['product_id']) && isset($params['quantity']))
			{
				$databaseParams = array();
				$databaseParams['product_id'] = $params['product_id'];
				$productList = $this->Productmodel->searchByParams($databaseParams);
				
				if ($this->session->userdata('cart') != null)
				{
					$cart = $this->session->userdata('cart');
					
					$flg = true;
					foreach($cart as $key=>$val)
					{
						if ($val['product_id'] == $params['product_id'])
						{
							$cart[$key]['quantity'] = $val['quantity'] + $params['quantity'];
							$cart[$key]['subtotal'] = $cart[$key]['quantity'] * $val['price'];
							$flg = false;
						}
					}
					
					if ($flg)
					{
						$cartCount = count($cart);
						
						$product = array();
						$product['product_id'] = $params['product_id'];
						$product['quantity'] = $params['quantity'];
						
						if ($productList)
						{
							$product['price'] = $productList[0]->price;
							$product['main_image'] = $productList[0]->main_image;
							
							$product_name = "product_name_".$lang;
							
							$product['product_name'] = $productList[0]->$product_name;
							$product['subtotal'] = $product['quantity'] * $product['price'];
						}
						
						$cart[$params['product_id']] = $product;
					}
					
					$this->session->set_userdata('cart', $cart);
				}
				else
				{
					$product = array();
					$product['product_id'] = $params['product_id'];
					$product['quantity'] = $params['quantity'];
					
					if ($productList)
					{
						$product['price'] = $productList[0]->price;
						$product['main_image'] = $productList[0]->main_image;
							
						$product_name = "product_name_".$lang;
						
						$product['product_name'] = $productList[0]->$product_name;
						$product['subtotal'] = $product['quantity'] * $product['price'];
					}
					
					$cart[$params['product_id']] = $product;
					
					$this->session->set_userdata('cart', $cart);
				}
				
				if ($productList)
				{
					$data = array();
					
					$data['status'] = true;
					$product_name = "product_name_".$lang;
					$data['product_name'] = $productList[0]->$product_name;
					
					echo json_encode($data);
					
					exit;
				}
			}
			
		}
		
		
	}
	
	public function updateCart()
	{
		$params = $this->input->post();
		
		if ($params)
		{
			if ($this->session->userdata('cart') != null)
			{
				
				$cart = $this->session->userdata('cart');
				
				$total = 0;
				foreach($cart as $key=>$val)
				{
					if ($params['mode'] == 'deleteCart')
					{
						if ($val['product_id'] == $params['product_id'])
						{
							unset($cart[$key]);
							continue;
						}
					}
					
					if ($params['mode'] == 'pc')
					{
						$updateQuantity = $params['quantity'];
						$cart[$key]['quantity'] = $updateQuantity[$val['product_id']];
						$cart[$key]['subtotal'] = $cart[$key]['quantity'] * $cart[$key]['price'];
					}
					else if ($params['mode'] == 'sp')
					{
						$updateQuantity = $params['quantity2'];
						$cart[$key]['quantity'] = $updateQuantity[$val['product_id']];
						$cart[$key]['subtotal'] = $cart[$key]['quantity'] * $cart[$key]['price'];
					}
					
					$databaseParams = array();
					$databaseParams['product_id'] = $val['product_id'];
					$product = $this->Productmodel->searchByParams($databaseParams);
					
					if ($product)
					{
						$lang = get_lang();

						$product_name = "product_name_".$lang;
						
						$cart[$key]['product_name'] = $product[0]->$product_name;
						$cart[$key]['price'] = $product[0]->price;
						$cart[$key]['main_image'] = $product[0]->main_image;
						
						$subtotal = $cart[$key]['quantity'] * $cart[$key]['price'];
						
						$cart[$key]['subtotal'] = $subtotal;
						
						$total += $subtotal;
					}
					
				}

				$this->session->set_userdata('cart', $cart);
				$data['cart'] = $cart;
				$data['total'] = $total;
			}
		}
		
		redirect('cart');
	}

}
