<?php session_start(); ?>
<html>
<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="header">
        Welcome to admin page!
    </div>
    <?php
    if(isset($_SESSION['valid'])) {         
        include("db_connect.php");                  
        $result = mysqli_query($con, "SELECT * FROM admin");
    ?>
                
        Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br/>
        <br/>
        <a href='view.php'>View and Add Resevation</a>
        <br/><br/>
    <?php   
    } else {
        echo "You must be logged in to view this page.<br/><br/>";
        echo "<a href='login.php'>Login</a>";
    }
    ?>
    
</body>
</html>