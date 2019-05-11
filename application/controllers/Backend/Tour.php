<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {
 
	public function index()
	{
		$this->template->load('themes/theme1/template', 'view/beta/tour/index');
	}
}
