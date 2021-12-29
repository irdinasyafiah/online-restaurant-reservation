<?php

require("db_connect.php");

    $id = $_POST['id'];
	$date = $_POST['res_date'];
	$time = $_POST['res_time'];
	$name = $_POST['fullName'];
	$phone = $_POST['phone'];
	$pax = $_POST['pax'];
	   

      //updating the table
     	$query = "UPDATE reservation SET res_date='$date',res_time='$time',fullName='$name',phone='$phone',pax='$pax' WHERE res_id='$id'";
		
		$result=mysqli_query($con,$query) or die ("QUERY FAILED");
		
		/*if($result)
		{
       
		echo("<SCRIPT LANGUAGE='JavaScript'>
				 window.alert('Successfully Update')
				 window.location.href='edit.php'
						</SCRIPT>");
       
		}
		else
		{
			echo("<SCRIPT LANGUAGE='JavaScript'>
				 window.alert('Error while Updating record')
				 window.location.href='view.php'
						</SCRIPT>");
  
        
		}*/

 mysqli_close($con);

?>
