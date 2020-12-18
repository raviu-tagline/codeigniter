<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head>
	
   <body> 
      <a href = "<?php echo base_url(); ?>index.php/stud/add_view">Add</a>
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>Sr#</td>"; 
            echo "<td>Student Name.</td>"; 
            echo "<td>Student Mobile.</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->stud_name."</td>"; 
               echo "<td>".$r->stud_mobile."</td>"; 
               echo "<td><a href = '".base_url()."index.php/stud/edit/"
                  .$r->stud_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/stud/delete/"
                  .$r->stud_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>