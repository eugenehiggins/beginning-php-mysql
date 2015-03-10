<?php   

//check to see if a session variable named "message" is set
if (isset($_SESSION["message"])){ 

    //if so display the html and javascript below
?>
            
    <div id="message"><?php echo $_SESSION["message"] ?></div>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $("div#message").fadeOut("slow", function () {
                    $("div#message").remove();
                });
         
            }, 1500);
         });

    </script>
            
            
<?php   
    $_SESSION["message"]="";
} 
?>