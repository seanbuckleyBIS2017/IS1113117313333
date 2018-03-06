<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        
        
         <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: Purple;
}

.active {
    background-color: white;
    
}
   body {
   background-image: url("https://content.paulreiffer.com/wp-content/uploads/2014/10/Paul-Reiffer-Professional-Photography-Photographer-Homepage-Background-New-Zealand-1920.jpg");
   background-size: cover;
   
}


</style>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <div align="center">
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                     
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

<br/>
                    
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            
            <?php
            // Set sesson variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["FullName"] = $_POST["FullName"];
            $_SESSION["Email"] = $_POST["Email"];
            $_SESSION["Address1"] = $_POST["Address1"];
            $_SESSION["Address2"] = $_POST["Address2"];
            $_SESSION["Postcode"] = $_POST["Postcode"];
            $_SESSION["City"] = $_POST["City"];
            ?>
            
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
        


    
    </body>
    </div>
    
    
    
</html>