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


    </head>
    <body>
        
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



        
        <h4>RECIEPT</h4>
        <?php
        // Echo session variables that were set on previous page
        echo "Full Name :" . $_SESSION["FullName"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo "Address Line 1 :" . $_SESSION["Address1"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo "Address Line 2 :" . $_SESSION["Address2"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo "Email :" . $_SESSION["Email"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo "Post code :" . $_SESSION["Postcode"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo "City :" . $_SESSION["City"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo "Total :" . $_SESSION["total"] . ".";
        ?>
        
           
        
    
    </body> 
    </div>
    <style>
         body {
   background-image: url("https://content.paulreiffer.com/wp-content/uploads/2014/10/Paul-Reiffer-Professional-Photography-Photographer-Homepage-Background-New-Zealand-1920.jpg");
   background-size: cover;
   
   
}

    </style>
</html>