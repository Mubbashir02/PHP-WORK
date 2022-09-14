<?php

include ('db.php');

$query = "select * from employeestb";
$row = mysqli_query ($con,$query);
$totalrow =  mysqli_num_rows($row);

if ($totalrow != 0)

{
	?>
    
    
    <table border="1" align="center" style="text-align:center" width="50">
    
    
   <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>salary</th>
       <th>edit</th>
       <th>delete</th>
       
        

        </tr>
        
        <?php
		
		
		while ($data = mysqli_fetch_assoc ($row))
		
		echo "<tr>
		<td>".$data['id']."</td>
		<td>".$data['firstname']."</td>
		<td>".$data['lastname']."</td>
		<td>".$data['email']."</td>
        <td>".$data['salary']."</td>
		
		<td><a href='edit.php?id=$data[id]&firstname=$data[firstname]&lastname=$data[lastname]&email=$data[email]&salary=$data[salary]'>Edit</a></td>
		
		<td><a href='delete.php?id=$data[id]&firstname=$data[firstname]&lastname=$data[lastname]&email=$data[email]&salary=$data[salary]'>Delete</a></td>
		
		
		</tr>";

			}
		 	
		
		
		else
		{
			echo"No Records Found";
			}



?>
</table>


