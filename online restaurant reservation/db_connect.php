<?php 
//connection to mySQL
$host="localhost";
$username="root";
$password="";
$con= mysqli_connect($host,$username,$password)or die("Could not connect");
//connection to database
$db = mysqli_select_db( $con,"restaurant")or die("Could not select database");
?>
