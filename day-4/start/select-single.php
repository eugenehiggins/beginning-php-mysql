<?php
session_start();
if($_SESSION["userID"]){



// the sql string
$sql = "SELECT  `customerNumber` ,  `contactLastName` ,  `contactFirstName` ,  `phone` ,  `addressLine1` ,  `addressLine2` ,  `city` ,  `state` ,  `postalCode` ,  `country` 
        FROM  `customers` 
        WHERE  `customerNumber` =".$_GET['id']; //try $_GET['ID']
        
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
        <title>Display Single Customer</title>
        <script src="/scripts/jquery-2.1.3.min.js"></script>
        <script src="/scripts/jquery-ui.js"></script>
        <link rel="stylesheet" href="/scripts/jquery-ui.css">
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
                        <td></td>
                        <td>
                            <a href="update-record-form.php?id=<?php echo $row["customerNumber"] ?>">edit</a>
                            <a href="*" id="delete" onClick="return false">delete</a>
                            <a href="customer-list.php">back to list</a>
                        </td>
                    </tr>
                    
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
        
        <div id="dialog-confirm" class="ui-helper-hidden" title="Delete record?">
          <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Are you sure you want to delete this record?</p>
        </div>
        <script>
          $(function() {
            $( "#delete" ).click(function() {
                $( "#dialog-confirm" ).dialog({
                  resizable: false,
                  hide: false,
                  height:140,
                  modal: true,
                  buttons: {
                    "Delete record": function() {
                      $( this ).dialog( "close" );
                      window.location.href = "delete-record.php";
                    },
                    Cancel: function() {
                      $( this ).dialog( "close" );
                    }
                  }
                });
            });
          });
        </script>  
    </body>
</html>
<?php
    $result->close();
    
    //log user after inactivity
    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once $path . "/checkTimeout.php";
}else {
    header("Location: index.php");
} // //if($_SESSION["userID"]){

?>
