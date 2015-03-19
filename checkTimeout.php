<?php

//this kills a session after 20 minutes of inactivity
//found this at http://stackoverflow.com/questions/5441168/id-like-to-kill-a-session-after-a-user-has-been-inactive-for-20-minutes-in-php?rq=1

$inactive = 1200;

if(!isset($_SESSION['timeout'])) {
   $_SESSION['timeout'] = time();
}

$session_life = time() - $_SESSION['timeout']; 

if($session_life > $inactive) {
   session_destroy(); 
   header("Location: index.php");
}


$_SESSION['timeout']=time();