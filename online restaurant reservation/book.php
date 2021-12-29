<?php 
require 'db_connect.php';
		
	   $add_date=$_POST['date_res'] ; 
	   $add_time=$_POST['time']  ; 
	   $add_fname=$_POST['fname'] ; 
	   $addno_phone=$_POST['phone'] ;
	   $add_pax=$_POST['pax'];
	
	  
       //insert data
	   $query= "INSERT INTO reservation(res_date, res_time, fullName, phone, pax) VALUES ('$add_date', '$add_time','$add_fname','$addno_phone','$add_pax')" ;		
	
	   $result = mysqli_query($con,$query) or die("Query failed");	// SQL statement for checking
         //checking either success or not
		 
       if ($result)
		 echo("<SCRIPT LANGUAGE='JavaScript'>
			  window.alert('Reservation successfully!!') 
			  window.location.href='homeUser.html'
									</SCRIPT>");		
		else
		 echo("<SCRIPT LANGUAGE='JavaScript'>
			  window.alert('Reservation Failed 
			  window.location.href='index.php'
									</SCRIPT>");
	    mysqli_close($con);
?>
