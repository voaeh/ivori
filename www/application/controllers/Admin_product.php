<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Productmodel');
		
	}
	
	public function index()
	{
		$data['content'] = 'admin_product/index';
		$this->load->view('layout_bk', $data);
	}
	
	public function register()
	{
		$params = $this->input->post();
		
		if($params)
		{
			$arrErr = array();
			
			$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			
			$this->form_validation->set_message('required', ' %s required.');
			$this->form_validation->set_message('max_length', '%s must not exceed 255 characters.');
			$this->form_validation->set_message('numeric', '%s must be a number.');
			
			$this->form_validation->set_rules('product_name_en', 'Product Name EN', 'required|max_length[255]');
			$this->form_validation->set_rules('product_name_th', 'Product Name TH', 'required|max_length[255]');
			$this->form_validation->set_rules('product_code', 'Product Code', 'required|max_length[255]');
			$this->form_validation->set_rules('price', 'Price', 'required|numeric');
			$this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');

			if (empty($_FILES['main_image']['name']))
			{
				$arrErr['main_image'] = 'Main Image not found.' ;
			}
			else
			{
				$a = getimagesize($_FILES['main_image']['tmp_name']);
				$image_type = $a[2];

				if(!in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
				{
					$arrErr['main_image'] = 'Main Image type must be .gif, .jpg, .png, .bmp' ;
				}
			}
			
			 if ($this->form_validation->run() == TRUE && count($arrErr) == 0)
			 {
				$databaseParams = array();
				$databaseParams['product_name_en'] = (isset($params['product_name_en']))? $params['product_name_en']:'';
				$databaseParams['product_name_th'] = (isset($params['product_name_th']))? $params['product_name_th']:'';
				$databaseParams['product_code'] = (isset($params['product_code']))? $params['product_code']:'';
				$databaseParams['short_detail_en'] = (isset($params['short_detail_en']))? $params['short_detail_en']:'';
				$databaseParams['short_detail_th'] = (isset($params['short_detail_th']))? $params['short_detail_th']:'';
				$databaseParams['long_detail_en'] = (isset($params['long_detail_en']))? $params['long_detail_en']:'';
				$databaseParams['long_detail_th'] = (isset($params['long_detail_th']))? $params['long_detail_th']:'';
				$databaseParams['quantity'] = (isset($params['quantity']))? $params['quantity']:'';
				$databaseParams['price'] = (isset($params['price']))? $params['price']:'';
				$databaseParams['discount'] = (isset($params['discount']))? $params['discount']:'';
				$databaseParams['create_date'] = date('Y-m-d');
				
				$extData = explode('.', $_FILES['main_image']['name']);
				$extIndex = count($extData) - 1;
				$new_name = time().rand(1,1000).'.'.$extData[$extIndex];
				
				$databaseParams['main_image'] = $new_name;
				
				$product_id = $this->Productmodel->insertProduct($databaseParams);
				
				$target_folder = APPPATH.'../public/img/product/'.$product_id;
				
				if (!file_exists($target_folder))
				{
					mkdir($target_folder);
				}
				
				$target_file = APPPATH.'../public/img/product/'.$product_id.'/'.$new_name;
				
				move_uploaded_file($_FILES['main_image']['tmp_name'], $target_file);
				
				$data['success'] = 'Add Product Completed.';
				
			 }
			 else
			 {
				 $data['arrErr'] = $arrErr;
			 }
	  
		}
		
		$data['content'] = 'admin_product/register';
		$this->load->view('layout_bk', $data);
	}

}
