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
$servername =   "eugenehiggins-beginning-php-mysql-1321467";
$username   =   "eugenehiggins";
$password   =   "";
$dbname     =   "classicmodels";

// Create a connection object
$conn = new mysqli($servername, $username, $password, $dbname);

// See if the connect_error property of the connection object has a value
// If it does, the connection failed
if ($conn->connect_error) {
    //kill the connection and report the error
    die("Connection failed: " . $conn->connect_error);
} 

// the sql string
//try "ORDER BY  `customerNumber` ASC"
$sql = "SELECT  `customerNumber` ,  `contactLastName` ,  `contactFirstName` ,  `state` ,  `phone` 
            FROM  `customers` 
            ORDER BY  `customerNumber` ASC  
            LIMIT 0 , 30";

// simultaneously send the sql string to the database via the connection object,
// and check to see if it succeeded

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title>Get Customers With Links</title>
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
                 if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        
                        $strOutput = "  <tr>
                                            <td><a href=\"select-single.php?id=".$row['customerNumber']."\">".$row['customerNumber']."</a></td>
                                            <td>".$row['contactLastName']."</td>
                                            <td>".$row['contactFirstName']."</td>
                                            <td>".$row['state']."</td>
                                            <td>".$row['phone']."</td>
                                        </tr>";
                        
                        echo $strOutput;
                    }
                    
                    
                 } else {
                     echo "There were no results";
                 }
             ?>
             </table>
        
        </div>
    </body>
</html>

<?php
$result->close();

//$conn->close;  
?>
