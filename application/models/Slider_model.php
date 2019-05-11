<?php
class Slider_model extends CI_Model {


    public function get()
    {
      return  $this->db->get("slider")->result();
    }

}