<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html> 
    <head>
        <title>Enter Details</title>
    
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
    </head>

    <body>
        <h4 class="details1">Please enter your payment details</h4>
    
    
            <form action="Ebus3.php" method="POST" >
                <label for="name" class="name1">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" class="name2">
                <br>
                <br>
                <label for="e-mail" class="email">E-mail</label>
                <input type="text" id="email" name="email" placeholder="email@ucc.ie" class="email2">
                <br>
                <br>
                <label for ="user_pin" class="pin">PIN</label>
                <input type="password" id="user_pin" placeholder="Card PIN" checked maxlength="4" class="pin2"/>
        
                <br>
                <br>
        
            <button type="submit" id="btnPurchase" disabled class="btnbuy">Proceed with purchase</button>
        </form> 
        
        <br/> 
        
        <button onClick="validateDetails()" class="btnvalidate">Validate</button>
            
        <?php
        // Set the session variables 
        $_SESSION{"total"} = $_POST{"total"};
        ?>
        
        <script type="text//javascript" src=="ebus2_validate.js></script>
    </body>
</html>
       