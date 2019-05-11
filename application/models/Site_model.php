<?php 
class Site_model extends CI_Model {
 
   
        public function update($table,$data,$id)
        {
            $this->db->update($table, $data, array('id' => $id));
        }

}