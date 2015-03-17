<?php
//this file was copied from Select-multiple-with-links.php

/*
    //create the connection to the database
    //get these values from https://docs.c9.io/v1.0/docs/setting-up-mysql
    //run `mysql-ctl cli`
    //run `select @@hostname;`
    //don't forget the semicolon after @@hostname
    $servername =   "genehiggins-beginning-php-mysql-1338783";
    $username   =   "genehiggins";
    $password   =   "";
    $dbname     =   "classicmodels";
    */
    $servername =   "";
    $username   =   "";
    $password   =   "";
    $dbname     =   "";

// Create a connection object
$conn = new mysqli($servername, $username, $password, $dbname);

// See if the connect_error property of the connection object has a value
// If it does, the connection failed
if ($conn->connect_error) {
    //kill the connection and report the error
    die("Connection failed: " . $conn->connect_error);
} 

// the sql string
$sql = "";
        
// simultaneously send the sql string to the database via the connection object,
// and check to see if it succeeded

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>Add New Customer</title>
    <script src="/scripts/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
 <?php 
 if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
 }
?>    

<form name="personal-info" action="update-record.php" method="post" class="dark-matter ">    
    <h1>Contact Form 
        <span>Please fill all the text in the fields.</span>
    </h1>
    <label>
        <span>First Name :</span>
        <input id="contactFirstName" type="text" name="contactFirstName" value=""  />
    </label>
    
    <label>
        <span>Last Name :</span>
        <input id="contactLastName" type="text" name="contactLastName" value="" />
    </label>
    
    <label>
        <span>Phone :</span>
        <input id="phone" type="text" name="phone" value="" />
    </label>
    
    <label>
        <span>Street 1 :</span>
        <input id="addressLine1" type="text" name="addressLine1" value="" />
    </label>
    
    <label>
        <span>Street 2 :</span>
        <input id="addressLine2" type="text" name="addressLine2" value="" />
    </label>

    <label>
        <span>City :</span>
        <input id="city" type="text" name="city" value="" />
    </label>
    
    <label>
        <span>State :</span>
        <input id="state" type="text" name="state" value="" />
    </label>
    
    <label>
        <span>Zip :</span>
        <input id="postalCode" type="text" name="postalCode" value="" />
    </label>
    
    <label>
        <span>Country :</span>
        <input id="country" type="text" name="country" value="" />
    </label>
    
     <label>
        <span>&nbsp;</span> 
        <!-- we need something that will pass the customerNumber to the next page -->
        <input type="submit" value="Submit" class="button">
    </label>    
    
</form>

</body>
</html>