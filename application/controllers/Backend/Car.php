<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends MY_Controller {


     public function __construct()
     {
          parent::__construct();
          $this->load->model("car_model","car");
     }
  
    public function index()
    {
        $this->template->load('beta/template', 'beta/car/index');
    }
      public function ekstra()
    {
         $data["ekstra"] = $this->car->get_ekstra();
         $this->template->load('beta/template', 'beta/car/ekstra',$data);
    }
        public function period()
    {
         $data["period"] = $this->car->get_period();
         $this->template->load('beta/template', 'beta/car/period',$data);
    }
     public function driver()
    {
        $this->template->load('beta/template', 'beta/car/driver');
    }
       public function attribute()
    {
        $data["attribute"] = $this->car->get_attribute();
        $this->template->load('beta/template', 'beta/car/attribute',$data);
    }
  
    public function attributeadd()
    {
      $arraypost = $this->_post_return();
         if ($_FILES['icon']["name"]  != ""){
            $icon = upload_files("images/icon/",$this->_post_return("name"),'icon');
          } else { 
            //$logo =  $site[0]->icon;
          }
      $arrayimages = array('icon' => $icon);
      $array = array_merge($arraypost,$arrayimages);
      $this->car->insert("rentacarattribute",$array);
      redirect("Backend/Car/attribute","refresh");
    }
  
         public function deleteattribute($id)
    {
        $data["attribute"] = $this->car->deleteattribute($id);
         redirect("Backend/Car/attribute");
    }
  
   public function ekstraadd()
    {
      $arraypost = $this->_post_return();
         if ($_FILES['icon']["name"]  != ""){
            $icon = upload_files("images/icon/",$this->_post_return("name"),'icon');
          } else { 
            //$logo =  $site[0]->icon;
          }
      $arrayimages = array('icon' => $icon);
      $array = array_merge($arraypost,$arrayimages);
      $this->car->insert("rentacarekstra",$array);
      redirect("Backend/Car/ekstra","refresh");
    }
  
         public function deleteekstra($id)
    {
        $this->car->deleteekstra($id);
         redirect("Backend/Car/ekstra");
    }
  
  
     public function periodadd()
    {
      $arraypost = $this->_post_return();
          
      $this->car->insert("rentacarperiod",$arraypost);
      redirect("Backend/Car/period","refresh");
    }
  
         public function deleteperiod($id)
    {
         $this->car->deleteperiod($id);
         redirect("Backend/Car/period");
    }
}