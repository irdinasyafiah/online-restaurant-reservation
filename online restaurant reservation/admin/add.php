<?php 
include 'db_connect.php';
           //assign textbox to variable
	
	if(isset($_POST['submit']))
	{
	   $add_date=$_POST['res_date']; 
	   $add_time=$_POST['res_time']; 
	   $add_name=$_POST['fullName']; 
	   $add_phone=$_POST['phone']; 
	   $add_pax=$_POST['pax'];  
	   
                //insert data
	   $query= "INSERT INTO reservation(res_date,res_time,fullName,phone,pax) VALUES ('$res_date','$res_time','$fullName','$phone','$pax')" ;		
	   
	   $result = mysqli_query( $con,$query) or die("Query failed");	// SQL statement for checking
	   
         //checking either success or not
             
			 if ($result)
			 {
			     echo("<SCRIPT LANGUAGE='JavaScript'>
									window.alert('Add Succesfully!!')
									window.location.href='view.php'
									</SCRIPT>");
			 }
		 
		 
		 
		else
		 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Problem occured!!')
				 window.location.href='view.php'
									</SCRIPT>");
	
	}
	
	    mysqli_close($con);
	
?>

