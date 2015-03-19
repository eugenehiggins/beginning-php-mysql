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

// the sql string is passed to this script upstream


// simultaneously send the sql string to the database via the connection object,
// and check to see if it succeeded

$result = $conn->query($sql);