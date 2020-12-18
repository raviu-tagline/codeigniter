<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
		
         <?php 
            echo form_open('Stud_controller/update_student'); 
            echo form_hidden('old_id',$old_id);
            echo "id ::::::: $old_id<br>"; 
            echo form_label('Student Name .'); 
            echo form_input(array('id'=>'name','name'=>'name','value'=>$records[0]->stud_name)); 
            echo "<br>"; 

            echo form_label('Student Mobile .'); 
            echo form_input(array('id'=>'mobile','name'=>'mobile','value'=>$records[0]->stud_mobile)); 
            echo "<br>"; 

            print_r($records);
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>