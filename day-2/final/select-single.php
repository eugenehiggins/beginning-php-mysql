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
$sql = "SELECT  `customerNumber` ,  `contactLastName` ,  `contactFirstName` ,  `phone` ,  `addressLine1` ,  `addressLine2` ,  `city` ,  `state` ,  `postalCode` ,  `country` 
        FROM  `customers` 
        WHERE  `customerNumber` =".$_GET['id']; //try $_GET['ID']
        
// simultaneously send the sql string to the database via the connection object,
// and check to see if it succeeded

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title>Display Single Customer</title>
        <script src="/scripts/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="dark-matter">
            
            <h1>Customer:</h1>
                <table>
             <?php 
                 if ($result->num_rows > 0) {
                    
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td class="label">ID</td>
                        <td class="data"><?php echo $row["customerNumber"] ?></td>
                    </tr>
                    <tr>
                        <td class="label">Last Name</td>
                        <td class="data"><?php echo $row["contactLastName"] ?></td>
                    </tr>
                    <tr>
                        <td class="label">First Name</td>
                        <td class="data"><?php echo $row["contactFirstName"] ?></td>
                    </tr>
                    <tr>
                        <td class="label">Street Address</td>
                        <td class="data"><?php echo $row["addressLine1"] ?></td>
                    </tr>  
                    <tr>
                        <td class="label">Additional Address</td>
                        <td class="data"><?php echo $row["addressLine2"] ?></td>
                    </tr>
                    <tr>
                        <td class="label">City</td>
                        <td class="data"><?php echo $row["city"] ?></td>
                    </tr>
                    <tr>
                        <td class="label">State</td>
                        <td class="data"><?php echo $row["state"] ?></td>
                    </tr>
                    <tr>
                        <td class="label">Zip</td>
                        <td class="data"><?php echo $row["postalCode"] ?></td>
                    </tr>
                    <tr>
                        <td class="label">Country</td>
                        <td class="data"><?php echo $row["country"] ?></td>
                    </tr>
         <?php 
                    } //closes: while($row = $result->fetch_assoc()) {
            } //closes: if ($result->num_rows > 0) {
         ?>      
             </table>
        
        </div>
    </body>
</html>
