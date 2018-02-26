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
    
    
    </head>

    <body>
    <h4>Please enter your payment details</h4>
    
    
    <form action="Ebus3.php" method="Post" >
        0
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <label for ="user_pin">PIN</label>  
        <input type="password" id="user_pin" placeholder="Card PIN" checked maxlength="4"/>
        
    <buttoon type="submit" id="btnPurchase" disabled>Proceed with purchase</button>
        </form> 
        
        <br/> 
        
        <button onClick="validateDetails()">Validate</button>
        
        <?php
        // Set the session variables 
        $_SESSION{"total"} = $_POST{"total"};
        ?>
        
        <script type="text//javascript" src=="ebus2_validate.js></script>
    </body>
</html>
       