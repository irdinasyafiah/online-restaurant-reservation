<?php 
session_start();
include("db_connect.php");

if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);

    if(!$_POST['username']|!$_POST['password'])
				 {  
					 
							  echo("<SCRIPT LANGUAGE='JavaScript'>
									 window.alert('You did not complete all of the required fields')
									 </SCRIPT>");
		 
								  exit();
				  }
					
					$query = "SELECT * FROM admin where username='$user' AND password='$pass'"; 
					$result = mysqli_query( $con,$query) or die("Query failed");	// SQL statement for checking
					
						 if(mysqli_num_rows($result) <= 0)   			// check either result found or not
							   {
								   
								 echo("<SCRIPT LANGUAGE='JavaScript'>
								              window.alert('Wrong username password combination.Please re-enter.') 
											  window.location.href='login.php'
									</SCRIPT>");
									exit();
							                     		// redirect to another page (data not found!)
							   }
							   
							   else
							   {
								$info = mysqli_fetch_array($result); 	// returns a row from a recordset
								$_SESSION['username']=$info['username'];	// assign field in username to session [user]	   
								
								echo("<SCRIPT LANGUAGE='JavaScript'>
	                              window.alert('Login Succesfully! Hi, $user' )
							                  window.location.href='view.php'
	                                </SCRIPT>");  
	                           
									  exit();
									}
							
							   }
		 
				mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<p><font size="+2">Login</font></p>
	<form name="form1" method="post" action="login.php">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</html>

