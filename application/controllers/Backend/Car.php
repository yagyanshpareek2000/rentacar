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
        $data["make"] = $this->car->get_makes();
        $data["attribute"] = $this->car->get_attribute();
        $data["car"] = $this->car->get_car();
        $data["class"] = $this->car->get_class();
        $data["gear"] = $this->car->get_gear();
        $data["fuel"] = $this->car->get_fuel();
        $data["case"] = $this->car->get_case();
        $data["category"] = $this->car->get_category();
        $data["period"] = $this->car->get_period();
        $this->template->load('beta/template', 'beta/car/index',$data);
    }
    public function ekstra()
    {
         $data["ekstra"] = $this->car->get_ekstra();
         $this->template->load('beta/template', 'beta/car/ekstra',$data);
    }
    public function category()
    {
        $data["category"] = $this->car->get_category();
        $this->template->load('beta/template', 'beta/car/category',$data);
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
    public function add()
    {
        $arraypost = $this->_post_return();

        if ($_FILES['file']["name"]  != ""){
            $file = upload_files("images/car/","Arac Resmi",'file');
        } else {
            //$logo =  $site[0]->icon;
        }
        $arrayimages = array('file' => $file);
        $array = array_merge($arraypost,$arrayimages);
        $this->car->insert("rentacarcar",$array);
        $lastid = $this->db->insert_id();
//
//        $attribute = $this->_post_return("attribute");
//        foreach ($attribute as $val)
//        {
//            $data = array("id_rentacarcar" => $lastid , "id_attribute",$val);
//            $this->car->add_car_attribute($data);
//        }

        redirect("Backend/Car/index","refresh");
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
    public function get_model($id)
    {
        $data = $this->car->get_model($id);
        echo json_encode($data);
    }
    public function categoryadd()
    {
        $arraypost = $this->_post_return();

        $this->car->insert("rentacarcategory",$arraypost);
        redirect("Backend/Car/category","refresh");
    }
    public function deletecategory($id)
    {
        $this->car->deletecategory($id);
        redirect("Backend/Car/category");
    }
    public function page()
    {
       $this->load->view("beta/car/period_modal");
    }
    public function periyot_modal($id)
    {
        $data["id"] = $id;
        $this->template->load('beta/template', 'beta/car/period_modal',$data);
    }

    public function periyot_add_car()
    {
        $data = array(
        'day1' =>  $this->_post_return("day1"),
        'day2' =>  $this->_post_return("day2"),
        'periyot' =>  $this->_post_return("periyot"),
        'ocak' => $this->_post_return("ay1"),
        'subat' => $this->_post_return("ay2"),
        'mart' => $this->_post_return("ay3"),
        'nisan' => $this->_post_return("ay4"),
        'mayis' => $this->_post_return("ay5"),
        'haziran' => $this->_post_return("ay6"),
        'temmuz' => $this->_post_return("ay7"),
        'agustos' => $this->_post_return("ay8"),
        'eylul' => $this->_post_return("ay9"),
        'ekim' => $this->_post_return("ay10"),
        'kasim' => $this->_post_return("ay11"),
        'aralik' => $this->_post_return("ay12"),
        'id_rentacar' => $this->input->post("id_rentacar"),
    );
        $this->db->where("id_rentacar",$this->input->post("id_rentacar"));
        $this->db->where("periyot",$this->input->post("periyot"));
        $query = $this->db->get("renatacar_periyot");
        if($query->num_rows() > 0)
        {
            $this->db->where("id_rentacar",$this->input->post("id_rentacar"))->where("periyot",$this->input->post("periyot"))->update("renatacar_periyot",$data);
        }else{
            $this->db->insert("renatacar_periyot",$data);
        }



    }

}