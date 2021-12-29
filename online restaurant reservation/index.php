<?php 
require_once ('db_connect.php');
?>

<!DOCTYPE html>
<!-----------JavaScript for validate form to make sure all data needed is enter------------>
<script>
    function validateForm() 
    {
        var name = document.resForm.date_res.value;
        var email = document.resForm.time.value;
        var phone = document.resForm.fname.value;
        var size = document.resForm.phone.value;
        var date = document.resForm.pax.value;
    
    
         if(date_res == "" || time =="" || fname == "" || phone == "" || pax == "" )
        {
             alert("Please fill in the data");
                return false;
        }
    }
</script>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>

                    <form name="resForm" action="book.php" method="post" onSubmit="validateForm()">
                        <div class = "form-row">

                            <input type="date" id="date_res" name="date_res" placeholder="Select date for booking" required>

                            <select id="time" name = "time">
                                <option value = "hour-select">Select Hour</option>
                                <option value = "10">10: 00</option>
                                <option value = "10">11: 00</option>
                                <option value = "10">12: 00</option>
                                <option value = "10">13: 00</option>
                                <option value = "10">14: 00</option>
                                <option value = "10">19: 00</option>
                                <option value = "10">20: 00</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "text" id="fname" name="fname" placeholder="Full Name">
                            <input type = "text" id="phone" name="phone" placeholder="Phone Number">
                        </div>

                        <div class = "form-row">
                            <input type = "number" id="pax" name="pax" placeholder="How Many Persons?" min = "1">
                            <input type = "submit" value = "BOOK TABLE">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>