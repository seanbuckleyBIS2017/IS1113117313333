<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <div align="center">
    <head>
        <title>RECIEPT</title>
        
        
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
    </head>
    <body>
        
        <h4>RECIEPT</h4>
        <?php
        // Echo session variables that were set on previous page
        echo "Total is :" . $_SESSION["total"] . ".";
        ?>
        
           
        
    
    </body> 
    </div>
</html>