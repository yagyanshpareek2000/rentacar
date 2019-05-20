<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 public function __construct(){
     parent::__construct();
    $this->load->model("Car_model");
 }

	public function index()
	{
    $data = $this->site_library->load();
    $data["car"] = $this->Car_model->get_car();
		$this->template->load('themes/theme1/template', 'themes/theme1/view/index',$data);
 	}
  	public function register()
	{
    $data = $this->site_library->load();
		$this->template->load('themes/theme1/template', 'themes/theme1/view/register',$data);

	}
}
