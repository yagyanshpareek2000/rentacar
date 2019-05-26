<?php 
class Car_model extends CI_Model {
 
   
        public function insert($table,$data)
        {
            $this->db->insert($table, $data);
        }
    public function get_car()
    {
        return $this->db->get("rentacarcar")->result();
    }

    public function get_make_car($id)
    {
        return $this->db->where("markaid",$id)->get("marka")->row()->markaname;
    }


    public function get_model_car($id)
    {
        return $this->db->where("modelid",$id)->get("model")->row()->modelname;
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
    public function add_car_attribute($data)
    {
        $this->db->insert("car_attribute",$data);
    }
  
  
     public function get_fuel_single($id)
    {
        return $this->db->where("id",$id)->get("rentacarfuel")->row()->fuel;
    }

      public function get_class_single($id)
    {
        return $this->db->where("id",$id)->get("rentacarclass")->row()->class;
    }
        public function get_gear_single($id)
    {
        return $this->db->where("id",$id)->get("rentacargear")->row()->gear;
    }
          public function get_category_single($id)
    {
        return $this->db->where("id",$id)->get("rentacarcategory")->row()->name;
    }
            public function get_make_single($id)
    {
        return $this->db->where("markaid",$id)->get("marka")->row()->markaname;
    }
              public function get_model_single($id)
    {
        return $this->db->where("modelid",$id)->get("model")->row()->modelname;
    }

    public function get_car_periyot_price($periyot,$day1,$day2,$id_rentacar,$mount)
    {

               $this->db->where("day1",$day1);
               $this->db->where("day2",$day2);
               $this->db->where("periyot",$periyot);
               $this->db->where("id_rentacar",$id_rentacar);
        $query = $this->db->get("renatacar_periyot");
        if($query->num_rows() > 0)
        {
           return $query->row()->$mount;
        }else{
            return 0;
        }
    }
}
