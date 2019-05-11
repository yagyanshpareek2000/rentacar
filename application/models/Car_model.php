<?php 
class Car_model extends CI_Model {
 
   
        public function insert($table,$data)
        {
            $this->db->insert($table, $data);
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
  
  
   public function get_attribute()
        {
            return $this->db->get("rentacarattribute")->result();
        }
   public function deleteattribute($id)
        {
              $this->db->where("id",$id)->delete("rentacarattribute");
        }
}