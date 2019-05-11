<?php
class Slider_model extends CI_Model {


    public function get_slider()
    {
      return  $this->db->get("slider")->result();
    }

}