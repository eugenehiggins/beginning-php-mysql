<?php

if ( $action = "add-record")
{

}

?>
<form name="personal-info" action="<?php echo $action.".php"?>" method="post" class="dark-matter ">    
    <h1>Contact Form 
        <span>Please fill all the text in the fields.</span>
    </h1>
    <label>
        <span>First Name :</span>
        <input id="contactFirstName" type="text" name="contactFirstName" placeholder="Contact First Name" />
    </label>
    
    <label>
        <span>Last Name :</span>
        <input id="contactLastName" type="text" name="contactLastName" placeholder="Contact Last Name" />
    </label>
    
    <label>
        <span>Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>
    
    <label>
        <span>Phone :</span>
        <input id="phone" type="text" name="phone" placeholder="Phone" />
    </label>
    
    <label>
        <span>Street 1 :</span>
        <input id="addressLine1" type="text" name="addressLine1" placeholder="Street Address" />
    </label>
    
    <label>
        <span>Street 2 :</span>
        <input id="addressLine2" type="text" name="addressLine2" placeholder="Street Address" />
    </label>

    <label>
        <span>City :</span>
        <input id="city" type="text" name="city" placeholder="City" />
    </label>
    
    <label>
        <span>State :</span>
        <input id="state" type="text" name="state" placeholder="State" />
    </label>
    
    <label>
        <span>Zip :</span>
        <input id="postalCode" type="text" name="postalCode" placeholder="Zip" />
    </label>
    
     <label>
        <span>&nbsp;</span> 
        
        <input type="submit" value="Submit" class="button">
    </label>    
</form>
    
    <!--
    <input type="button" class="button" value="Send" /> 
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
-->