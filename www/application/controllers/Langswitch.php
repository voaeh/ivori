<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Langswitch extends CI_Controller 
{

  public function switchLanguage() 
  {
    //get params
    $params = $this->uri->uri_to_assoc(3);

    //chk lang
    if($params['lang'] != "")
    {
      $lang = $params['lang'];
    }else
    {
      $lang = $ci->config->item('language');
    }
    
    //set session lang
    $this->session->set_userdata('lang', $lang);
    
    //uri
    $uri = explode('/uri/', $this->uri->uri_string());

	if(isset($uri[1]))
    {
      $uri = $uri[1];
      redirect(site_url($uri));
    }else 
    {
      redirect(site_url('top/index'));
    }
  }
}