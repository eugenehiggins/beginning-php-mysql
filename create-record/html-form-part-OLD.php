<?php

if ( $action = "add-record")
{

}

?>
<script>
<!--
(function($){
    $(document).ready(function(){

    })
})
//-->
</script>
<form name="personal-info" action="<?php echo $action.".php"?>" method="post" class="form">
   <!-- <form name="personal-info" action="<?php echo $action.".php"?>" class="form"> -->
    <fieldset>
        <legend>New customer</legend>
        <label>first name: </label><input name="contactFirstName" type="text" size="40">
        <label>last name:</label> <input name="contactLastName" type="text" size="40">
        <label>phone: </label><input name="phone" type="text" size="40">
        <label>street address:</label> <input name="addressLine1" type="text" size="40">
        <label>street address:</label> <input name="addressLine2" type="text" size="40">
        <label>city:</label> <input name="city" type="text" size="40">
        <label>state:</label> <input name="state" type="text" size="2">
        <label>zip:</label> <input name="postalCode" type="text" size="10">
        <label></label><input type="submit" value="Submit">

    </fieldset>
    
</form>