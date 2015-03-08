<?php

//this checks to see if this script is receiving data from the form
//if it isn't, there isn're really anything to do here.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //it's a good idea to make sure the variables are initialized
    $contactLastName = $contactFirstName = $phone = $email =  $addressLine1 = 
        $addressLine2 = "";

   //Array ( [contactFirstName] => gggggg [contactLastName] => [email] =>
   //[phone] => [addressLine1] => [addressLine2] => [city] => [state] => [postalCode] => ) 
    //extract the form data 
    $contactLastName    =   $_POST["contactLastName"];
    $contactFirstName   =   $_POST["contactFirstName"];
    $phone              =   $_POST["phone"];
    $email              =   $_POST["email"];
    $addressLine1       =   $_POST["addressLine1"];
    $addressLine2       =   $_POST["addressLine2"];
    $city               =   $_POST["city"];
    $state              =   $_POST["state"];
    $postalCode         =   $_POST["postalCode"];
   
    //create the connection to the database
    //get these values from https://docs.c9.io/v1.0/docs/setting-up-mysql
    $servername =   "eugenehiggins-beginning-php-mysql-1321467";
    //$servername = getenv('IP');
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
    $sql = "INSERT INTO customers (contactFirstName, contactLastName, email,addressLine1,
                addressLine2,city,state,postalCode)
            VALUES ('$contactFirstName','$contactLastName','$email','$addressLine1','$addressLine2',
                '$city','$state','$postalCode')";
        
    // simultaneously send the sql string to the database via the connection object,
    // and check to see if it succeeded
    if ($conn->query($sql) === TRUE) {
        // it succeeded so display a success message
        $id = $conn->insert_id;
        echo "New record created successfully. ID: " . $id;
    } else {
        // it failed.
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    //close the connection
    $conn->close();

}
