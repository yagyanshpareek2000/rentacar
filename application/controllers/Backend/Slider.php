<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends MY_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model("slider_model","slider");
    }

    public function index()
    {
        $data = array();
        $data["slider"] = $this->slider->get();
        $this->template->load('beta/template', 'beta/slider/index',$data);
    }

    public function update()
    {
        $site = $this->db->where("id",1)->get("site")->result();
        $arraypost = $this->_post_return();
        if ($_FILES['file']["name"]  != ""){
            $file = upload_files("images/slider/","test ediyoruz",'logo');
        }
         $arrayimages = array('file' => $file);
        $array = array_merge($arraypost,$arrayimages);
        $this->slider->update("slider",$array,1);
        redirect("Backend/Slider");
    }

    public function add()
    {
         $arraypost = $this->_post_return();
         if ($_FILES['file']["name"]  != ""){
            $file = upload_files("images/slider/",$this->_post_return("name"),'file');
        }

        $arrayimages = array('file' => $file);
        $array = array_merge($arraypost,$arrayimages);
        $this->slider->insert("slider",$array,1);
        redirect("Backend/Slider");
    }

    public function deleteslider($id)
    {
        $this->slider->deleteslider($id);
        redirect("Backend/Slider");
    }
}
