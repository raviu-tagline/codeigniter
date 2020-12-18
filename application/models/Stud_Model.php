<?php 
   class Stud_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("tbl_stud", $data)) { 
            return true;
         } 
      } 
   
      public function delete($id) { 
         if ($this->db->delete("tbl_stud", "stud_id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$old_id) { 
         
         $this->db->set($data);
         $this->db->where("stud_id", $old_id); 
         $this->db->update("tbl_stud", $data); 
      } 
   } 
?> 