<?php 
   class Stud_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("tbl_stud"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Stud_view',$data); 
      } 
  
      public function add_student_view() { 
         $this->load->helper('form'); 
         $this->load->view('Stud_add'); 
      } 
  
      public function add_student() { 
         $this->load->model('Stud_Model');
			
         $data = array('stud_name' => $this->input->post('name'),'stud_mobile' => $this->input->post('mobile')); 
			
         $this->Stud_Model->insert($data); 
   
         $query = $this->db->get("tbl_stud"); 
         $data['records'] = $query->result(); 
         $this->load->view('Stud_view',$data); 
      } 
  
      public function update_student_view() { 
          echo "huiiii";
         $this->load->helper('form'); 
         $id = $this->uri->segment('3'); 
         $query = $this->db->get_where("tbl_stud",array("stud_id"=>$id));
         $data['records'] = $query->result();
         $data['old_id'] = $id; 
         $this->load->view('Stud_edit',$data); 
      } 
  
      public function update_student(){ 
        
       
         $this->load->model('Stud_Model');
			
         $data = array( 
            'stud_name' => $this->input->post('name'), 
            'stud_mobile' => $this->input->post('mobile') 
         ); 
            
         
         $old_id = $this->input->post('old_id'); 
         $this->Stud_Model->update($data,$old_id); 
			
         $query = $this->db->get("tbl_stud"); 
         $data['records'] = $query->result(); 
         $this->load->view('Stud_view',$data); 
      } 
      
  
      public function delete_student() { 
         $this->load->model('Stud_Model'); 
         $id = $this->uri->segment('3'); 
         $this->Stud_Model->delete($id); 
   
         $query = $this->db->get("tbl_stud"); 
         $data['records'] = $query->result(); 
         $this->load->view('Stud_view',$data); 
      } 
   } 
?>