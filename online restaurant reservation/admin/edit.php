<?php

		require("db_connect.php");
		
	    $id=$_GET['id'];
		//selecting data associated with this particular id
		$query = "SELECT * FROM reservation WHERE res_id='$id'";
		$result = mysqli_query($con,$query) or die ("Query Failed");
	?>
	<?php 
	  while ($user = mysqli_fetch_array($result))
	  {
		   	$id=$user['res_id'];
		   	$date = $user['res_date'];
			$time = $user['res_time'];
			$name = $user['fullName'];
			$phone = $user['phone'];
			$pax = $user['pax'];
  }
?>	  

<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a> | <a href="view.php">View Data</a> | <a href="logout.php">Logout</a>
	<br/><br/>
	
	<form  method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Date</td>
				<td><input type="date" id="res_date" name="res_date" value="<?php echo $date;?>"></td>
			</tr>
			<tr> 
				<td>Time</td>
				<td><select id="res_time" name = "res_time">
                                <option value="<?php echo $time;?>"></option>
                                <option value = "10">10: 00</option>
                                <option value = "10">11: 00</option>
                                <option value = "10">12: 00</option>
                                <option value = "10">13: 00</option>
                                <option value = "10">14: 00</option>
                                <option value = "10">19: 00</option>
                                <option value = "10">20: 00</option>
                            </select></td>
			</tr>
			<tr> 
				<td>Full Name</td>
				<td><input type = "text" id="fullName" name="fullName" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Phone Number</td>
				<td><input type = "text" id="phone" name="phone" value="<?php echo $phone;?>"></td>
			</tr>
			<tr> 
				<td>Total of Person</td>
				<td><input type = "text" id="pax" name="pax" value="<?php echo $pax;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id;?>></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>

		</table>
	</form>
</body>
</html>