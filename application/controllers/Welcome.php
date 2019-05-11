<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 
	public function index()
	{
    $data = $this->site_library->load();
		$this->template->load('themes/theme1/template', 'themes/theme1/view/index',$data);
 	}
  	public function register()
	{
		$this->template->load('themes/theme1/template', 'themes/theme1/view/register');

	}
}
