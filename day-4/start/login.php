<?php
//start the session

// check if the user is logged in by checking the userID session variable.
//if this is the first time, this won't be set

    //if the user is logged in already they don't need to be here
    //send them to the index page
    //header("Location: index.php");

//if they are logged in, i.e. the userID session variable is set, then 
//check to see if POST data was received

    //user is not logged in so let's log them in
    
    //the DBConnect script is generic, the only thing that changes each time is 
    //the sql string. Define that first, then include DBConnect
    //In this case we need to see if the username and password match the 
    //database
    $sql = "SELECT  email, password, employeeNumber
            FROM  employees 
            WHERE  email = '" . $_POST["email"] . "'";

    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once $path . "/DBConnect.php";
    
    //check if we matched an email address in the employees table
    //I.E., there are more than zero rows
    

        //we matched the entered email to an email in our database, 
        //so parse our result into a row
        //and grab the email and password values into variables
        
        
        //check if the password the user typed in the login form
        //matches the password stored in the database
            
            //success! The user provided password and the password
            //stored in the database match
            
            //set the session variable that allows the user into all areas of the site
            //which is called...
            //that session variable will be set by the column returned from the DB,
            //which is called...
            
            //then send the user back to the index
            //you might want to hold off on this step until you're sure your code is working
            //HINT: you may want to print out some debug code to screen to see what you're getting
            //header("Location: index.php");
            
        // else
            //the password didn't match. Set the session variable for conveying 
            //this message and send them to the index page
            
            //you might want to hold off on this step until you're sure your code is working
            //header("Location: index.php");
        
        

    //else
        //didn't match an email
        //set the message session variable to let the user know that the email
        //wasn't found in the DB and then send them to the index page
        
        
    
//else
    //no POST data was received
    //send them somewhere else, they shouldn't be here
   // header("Location: index.php");
