<?php
//start session for session variables
session_start();

//this checks to see if this script is receiving data from the form
//if it isn't, there isn're really anything to do here.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //it's a good idea to make sure the variables are initialized
    $contactLastName = $contactFirstName = $phone = $email =  $addressLine1 = 
        $addressLine2 = "";

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
    //UPDATE MyGuests SET lastname='Doe' WHERE id=2
    $sql = "";
            

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
    
    //what do we want to do at this point? display a message on this page?
    //go back to the index? Create an additional page that shows success?
    header('Location: /index.php');

}
