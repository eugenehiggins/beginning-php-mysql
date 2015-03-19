 <?php

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
//$sql = "";

// simultaneously send the sql string to the database via the connection object,
// and check to see if it succeeded

$result = $conn->query($sql);
 
    
?>
<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title>Get Customers</title>
        <script src="/scripts/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="dark-matter">
            
            <h1>Customers:</h1>
             <table>
                 <tr>
                     <th>ID</th>
                     <th>Last Name</th>
                     <th>First Name</th>
                     <th>State</th>
                     <th>Phone</th>
                 </tr>
             <?php 
                //figure out if the query result has more than zero rows

                    // output data of each row
                    //create a loop that will run code on each row in returned data

                        //print out the combined html and php for each record


                 //if the query result had no rows 
                     //print a consolation message

             ?>
             </table>
        
        </div>
    </body>
</html>

<?php
//not a bad idea to close out the transaction
$result->close();
?>
