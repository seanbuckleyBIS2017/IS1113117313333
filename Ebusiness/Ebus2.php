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
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: purple;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

       
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <div align="center">
    <body>
        <h4>Please enter your payment details</h4>
        
        
             <ul>
  
  <li><a href="webhome.html">Galahad Technologies Homepage</a></li>
  <li><a href="../homepage.html">Project Homepage</a></li>
  <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
  <li class="dropdown">
    <a href="../Interests/Sports.html" class="dropbtn">Interests</a>
    <div class="dropdown-content">
      <a href="../Interests/Sports.html">Sports</a>
      <a href="../Interests/Music.html">Music</a>
      <a href="../Interests/Travel.html">Travel</a>
      <a href="../Interests/Cloud.html">Cloud</a>
    </div>
  </li>
</ul>

<br/>
<br/>
<br/>

        
        
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
   
    <style>
         body {
   background-image: url("https://content.paulreiffer.com/wp-content/uploads/2014/10/Paul-Reiffer-Professional-Photography-Photographer-Homepage-Background-New-Zealand-1920.jpg");
   background-size: cover;
   
   
}

    </style>
    
</html>