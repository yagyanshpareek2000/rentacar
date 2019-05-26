<?php 
class Site_model extends CI_Model {
 
   
        public function update($table,$data,$id)
        {
            $this->db->update($table, $data, array('id' => $id));
        }
    public function get()
    {
      return $this->db->where("id",1)->get("site")->result();

    }
}