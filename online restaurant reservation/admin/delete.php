<?php
//including the database connection file
include("db_connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query($con, "DELETE FROM reservation WHERE res_id=$id");

//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>
