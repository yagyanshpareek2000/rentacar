<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_library {
		 
		function load()
		{    
      $this->CI =& get_instance();
			$data = array();
      $data["site"] = $this->CI->db->where("id","1")->get("site")->result();
      return $data;
		}
}
 