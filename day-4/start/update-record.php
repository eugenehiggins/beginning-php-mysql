<?php
//start session for session variables
session_start();

//this checks to see if this script is receiving data from the form
//if it isn't, there isn're really anything to do here.
if ($_SESSION["userID"] && $_SERVER["REQUEST_METHOD"] == "POST") {
    //it's a good idea to make sure the variables are initialized
    $contactLastName = $contactFirstName = $phone = $email =  $addressLine1 = 
        $addressLine2 = "";

   //Array ( [contactFirstName] => gggggg [contactLastName] => [email] =>
   //[phone] => [addressLine1] => [addressLine2] => [city] => [state] => [postalCode] => ) 
    //extract the form data 
    $customerNumber     =   $_POST["customerNumber"];
    $contactLastName    =   $_POST["contactLastName"];
    $contactFirstName   =   $_POST["contactFirstName"];
    $phone              =   $_POST["phone"];
    $addressLine1       =   $_POST["addressLine1"];
    $addressLine2       =   $_POST["addressLine2"];
    $city               =   $_POST["city"];
    $state              =   $_POST["state"];
    $postalCode         =   $_POST["postalCode"];
    $country            =   $_POST["country"];
   
    // the sql string
    //UPDATE MyGuests SET lastname='Doe' WHERE id=2
    $sql = "UPDATE customers SET contactFirstName='$contactFirstName', contactLastName='$contactLastName', phone='$phone', addressLine1='$addressLine1',
                addressLine2='$addressLine2',city='$city',state='$state',postalCode='$postalCode',country='$country'
            WHERE customerNumber = $customerNumber";
            
    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once $path . "/DBConnect.php";

    // simultaneously send the sql string to the database via the connection object,
    // and check to see if it succeeded
    if ($conn->query($sql) === TRUE) {

        // it succeeded so display a success message
        $id = $conn->insert_id;
        $_SESSION["message"] = "Record successfully updated";
    
    } else {
        // it failed.
        $_SESSION["message"] = "Error: " . $sql . "<br>" . $conn->error;
    }
    
    header('Location: select-single.php?id='.$customerNumber);

} else {
    header("Location: index.php");
}
