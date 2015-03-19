<?php
session_start();
// check if the user is logged in
if (isset($_SESSION["userID"])) {
    //if the user is logged in already they don't need to be here
    //send them to the index page
    header("Location: index.php");
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
    //user is not logged in so let's log them in
    
    //the DBConnect script is generic, the only thing that changes each time is 
    //the sql string. Define that first, then include DBConnect
    //In this case we need to see if the username and password match the 
    //database
    $sql = "SELECT email, password, employeeNumber
            FROM  employees 
            WHERE  email = '" . $_POST["email"] . "'";

    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once $path . "/DBConnect.php";
    
    //check if we matched an email address in the employees table
    if ($result->num_rows > 0) {

        //we matched a password
        $row = $result->fetch_assoc();
        $email = $rows["email"];
        $password = $row["password"];
        
        //check if the password the user typed in the login form
        //matches the password stored in the database
        if($password == $_POST["password"]){
            //success! The user provided password and the password
            //stored in the database match
            echo "matched password";
            //set the session variable that allows the user into all areas of the site
            $_SESSION["userID"] = $row["employeeNumber"];
            header("Location: index.php");
            
        } else {
            //the password didn't match. Set the session variable for conveying 
            //this message and send them to the index page
            echo "matched email but not password";
            $_SESSION["message"] = "The password didn't match our records";
            //header("Location: index.php");
        }
        

    } else {
        //didn't match an email
        echo "didn't match email";
        $_SESSION["message"] = "We didn't find that email in our records";
    }
} else {
    echo "huh?";
    //send them somewhere else, they shouldn't be here
   // header("Location: index.php");
}