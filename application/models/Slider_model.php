<?php
class Slider_model extends CI_Model {


    public function get()
    {
      return  $this->db->get("slider")->result();
    }

    public function insert($table,$data)
    {
        $this->db->insert($table, $data);
    }
}