
<?php session_start(); ?>
<?php 
//Connection to database 
include 'db_connect.php';
$query="SELECT * FROM reservation ORDER BY  res_id Asc";
$result = mysqli_query( $con,$query) or die("Query failed");// SQL statement for checking
?>

<html>
<head>
	<title>Homepage</title>
</head>

<body>
	 <a href="add.html">Add New Data</a> | <a href="logout.php">Logout</a>
	<br/><br/>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Date</td>
			<td>Time</td>
			<td>Name</td>
			<td>Phone Number</td>
			<td>Total of Person</td>
		</tr>
		<?php
              
					//data looping
					while($row = mysqli_fetch_array($result)){ ?>
					  <tr>
						<td><?php echo $row['res_date'];?></td>
						<td><?php echo $row['res_time'];?></td>
						<td><?php echo $row['fullName']?></td>
						<td><?php echo $row['phone'];?></td>
						<td><?php echo $row['pax'];?></td>
						<td> <a href="edit.php?id=<?php print ($row['res_id']);?>"<button type='button' class="btn btn-outline-dark">Edit</button></a>
                             <a href="delete.php?id=<?php print ($row['res_id']);?>"<button type='button' class="btn btn-danger" name="delete">Delete</button></a>
                        </center></td>

					  <?php  
						 // looping close
						 }
						 
						 ?>
	</table>	
</body>
</html>