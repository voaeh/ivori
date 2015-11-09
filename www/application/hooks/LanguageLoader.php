<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LanguageLoader
{
  function initialize() 
  {
    $ci =& get_instance();
    
    $lang = $ci->session->userdata('lang');
    if($lang) 
    {
      $ci->lang->load('site', $lang);
    }else
    {
      //set session data
      $ci->session->set_userdata('lang', $ci->config->item('language'));
      
      //load lang
      $ci->lang->load('site', $ci->config->item('language'));
    }
   
  }
}