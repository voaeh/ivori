<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_ci()
{
  $CI =& get_instance();
  return $CI;
}

/**
 * get lang
 * @return string
 */
function get_lang()
{
  $CI = get_ci();
  return $CI->session->userdata('lang');
}

