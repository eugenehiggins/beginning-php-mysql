 <?php
// Start the session
session_start();
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
            
            <h1>Actions:</h1>
            <div id="status">
            <?php   // include the code that allows the return message from the database
                    // to display.?>
            <?php include ('status.php') ?>
           </div>
            <a href="day-1/create-record/add-record-form.php" target="_self">Add new customer</a>
        
        </div>
        <?php 
        $a = 1;
        $b = 2;
        $d = "dog";
        $c = $b + $d;
        $e = "cat";
        echo $d.$e.$a;
        ?>
    </body>
</html>