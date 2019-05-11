<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Betalogin extends CI_Controller {
 
	 public function login()
	{
		  $this->load->view("beta/login");
 	}
  
}
