<?php

//check to see if we're receiving post data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //initialize our variables
    $contactLastName = $contactFirstName = $phone = $email =  $addressLine1 = 
        $addressLine2 = "";

   //assign the post data to individual variables
    
    $contactLastName    =   $_POST["contactLastName"];
    $contactFirstName   =   $_POST["contactFirstName"];
    $phone              =   $_POST["phone"];
    $email              =   $_POST["email"];
    $addressLine1       =   $_POST["addressLine1"];
    $addressLine2       =   $_POST["addressLine2"];
    $city               =   $_POST["city"];
    $state              =   $_POST["state"];
    $postalCode         =   $_POST["postalCode"];
   
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

    // See if the connect_error property of the connection object has a value
    // If it does, the connection failed

    //create the sql variable and assign it the sql string

    // simultaneously send the sql string to the database via the connection object,
    // and check to see if it succeeded

        // it succeeded so display a success message

        //or it failed.

    //close the connection


}