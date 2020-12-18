<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
   <body> 
         <?php 
            echo form_open('Stud_controller/add_student');
            echo form_label('Student Name'); 
            echo form_input(array('id'=>'stud_name','name'=>'name')); 
            echo "<br/>"; 
			
            echo form_label('Student Mobile'); 
            echo form_input(array('id'=>'stud_mobile','name'=>'mobile')); 
            echo "<br/>"; 
			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>