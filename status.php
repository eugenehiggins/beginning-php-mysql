<?php   if (isset($_SESSION["message"])){ ?>
            
            <div id="message"><?php echo $_SESSION["message"] ?></div>
            <script>
                $(document).ready(function(){
                    setTimeout(function(){
                        $("div#message").fadeOut("slow", function () {
                            $("div#message").remove();
                        });
                 
                    }, 2000);
                 });

            </script>
            
            
<?php   
            $_SESSION["message"]="";
        } 
?>