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
        $this->template->load('beta/template', 'beta/slider/index',$data);
    }

    public function update()
    {
        $site = $this->db->where("id",1)->get("site")->result();
        $arraypost = $this->_post_return();
        /* Logo */
        if ($_FILES['logo']["name"]  != ""){
            $logo = upload_files("images/site/","test ediyoruz",'logo');
        } else {
            $logo =  $site[0]->logo;
        }
        /* End Logo */
        /* Favicon */
        if ($_FILES['favicon']["name"] != ""){
            $favicon = upload_files("images/site/","test ediyoruz",'favicon');
        } else {
            $favicon = $site[0]->favicon;
        }
        /* End Favicon */
        $arrayimages = array('logo' => $logo,'favicon' => $favicon,'description' => $this->_post_return("description"));
        $array = array_merge($arraypost,$arrayimages);
        $this->site->update("site",$array,1);
        redirect("Backend/Site");
    }

    public function insert()
    {
        $site = $this->db->where("id",1)->get("site")->result();
        $arraypost = $this->_post_return();
        /* Logo */
        if ($_FILES['logo']["name"]  != ""){
            $logo = upload_files("images/site/","test ediyoruz",'logo');
        } else {
            $logo =  $site[0]->logo;
        }
        /* End Logo */
        /* Favicon */
        if ($_FILES['favicon']["name"] != ""){
            $favicon = upload_files("images/site/","test ediyoruz",'favicon');
        } else {
            $favicon = $site[0]->favicon;
        }
        /* End Favicon */
        $arrayimages = array('logo' => $logo,'favicon' => $favicon,'description' => $this->_post_return("description"));
        $array = array_merge($arraypost,$arrayimages);
        $this->site->insert("site",$array,1);
        redirect("Backend/Site");
    }
}
