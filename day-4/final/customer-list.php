 <?php
session_start();
if($_SESSION["userID"]){

// the sql string
//try "ORDER BY  `customerNumber` ASC"
$sql = "SELECT  `customerNumber` ,  `contactLastName` ,  `contactFirstName` ,  `state` ,  `phone` 
            FROM  `customers` 
            ORDER BY  `customerNumber` ASC  
            LIMIT 0 , 30";

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . "/DBConnect.php";


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
    
    //log user after inactivity
    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once $path . "/checkTimeout.php";
} else {
    header("Location: index.php");
} //if($_SESSION["userID"]){
  
?>
