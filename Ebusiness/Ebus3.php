<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <div align="center">
    <head>
        <title>RECIEPT</title>
    </head>
    <body>
        
        <h4>RECIEPT</h4>
        <?php
        // Echo session variables that were set on previous page
        echo "Total is :" . $_SESSION["total"] . ".";
        ?>
        
        <style>
            body {
                background-color: #93B874;
            }
        </style>
    </body> 
    </div>
</html>