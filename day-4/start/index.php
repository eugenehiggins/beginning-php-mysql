 <?php
// Start the session



?>
<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title>Control Panel</title>
        <script src="/scripts/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="dark-matter">
        <?php
        // check if the user is logged in
        
            //user is logged in
        ?>
            <h1>Actions</h1>
            
            <p><a href="customer-list.php" target="_self">Retrieve customer list</a></p>
            
        <?php
            //log out user after inactivity
            s
            
        }  else {         //if (isset($_SESSION["userID"])) {
            //user is not logged in because userID session variable isn't set.
            //we need to log the user in
            //the following HTML is the login form
            
        ?>
        <h1>Login</h1>
   
        //we need a placeholder for our message system
        //the message system display results from the login
        //it checks the message session variable
        

        <form id='loginForm' action='login.php' method='post'>
            <fieldset >
                <legend>Login</legend>
                
                <label for='email' >email:</label>
                <input type='text' name='email' id='email'  maxlength="25" />
                 
                <label for='password' >Password:</label>
                <input type='password' name='password' id='password' maxlength="25" />
                 
                <input type='submit' name='Submit' value='Submit' />
             
            </fieldset>
        </form>
        <?php
       s
        ?>
        </div>
    </body>
</html>
