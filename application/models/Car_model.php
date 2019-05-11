<?php 
class Car_model extends CI_Model {
 
   
        public function insert($table,$data)
        {
            $this->db->insert($table, $data);
        }

    public function get_makes()
    {
        return $this->db->get("marka")->result();
    }
    public function get_category()
    {
        return $this->db->get("rentacarcategory")->result();
    }

    public function get_case()
    {
        return $this->db->get("rentacarcase")->result();
    }
    public function get_fuel()
    {
        return $this->db->get("rentacarfuel")->result();
    }
    public function get_gear()
    {
        return $this->db->get("rentacargear")->result();
    }
    public function get_class()
    {
        return $this->db->get("rentacarclass")->result();
    }


    public function get_model($id)
    {
        return $this->db->where("markaid",$id)->get("model")->result();
    }
     public function get_ekstra()
        {
            return $this->db->get("rentacarekstra")->result();
        }
   public function deleteekstra($id)
        {
              $this->db->where("id",$id)->delete("rentacarekstra");
        }
    
     public function get_period()
        {
            return $this->db->get("rentacarperiod")->result();
        }
   public function deleteperiod($id)
        {
              $this->db->where("id",$id)->delete("rentacarperiod");
        }
    public function deletecategory($id)
    {
        $this->db->where("id",$id)->delete("rentacarcategory");
    }


    public function get_attribute()
        {
            return $this->db->get("rentacarattribute")->result();
        }
   public function deleteattribute($id)
        {
              $this->db->where("id",$id)->delete("rentacarattribute");
        }
}