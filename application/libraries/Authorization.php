<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authorization {
 
 
  
		function gate()
		{
      	$this->CI =& get_instance();
			 if(empty($this->CI->session->userdata['logged_beta']))
       {
       redirect("Betalogin/login");
       }
 		}
 // Object instances will always be lower case

	
		 
}
