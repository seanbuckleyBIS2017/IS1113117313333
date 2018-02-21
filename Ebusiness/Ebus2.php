<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <div align="center">
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                    <label for="user_name">Customer Name</label>
                    <input type="text" id="user_name" placeholder="User Name" 
                    
                    <br/>
                    <br/>
                    
                     <label for="user_adresss">Address</label>
                    <input type="text" id="user_address" placeholder="Address" 
                    
                    <br/>
                    <br/>
                    
                     <label for="user_email">Email</label>
                    <input type="text" id="user_email" placeholder="User Email" 
                    
                    <br/>
                    <br/>
                    
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
            ?>
            
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <style>
            body {
    background-color: #93B874;
}
        </style>
    </body>
    </div>
    
    
    
</html>