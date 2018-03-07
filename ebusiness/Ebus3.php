<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html> 
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
    </head>
    
    <body>
        <!-- Page Content -->
        <h2 class="receipt">RECEIPT</h2>
        <br>
        <br>
        
        <div class="receiptinfo">
        <?php
        // Echo session variables that were set on previous page
        echo "Name " . $_POST["name"] . "<br>";
        echo "Email " . $_POST["email"] . "<br>";
        echo "Total is " . $_SESSION{"total"} . ".";
        ?>
        </div>
        <h3 class="thanks">Thanks for your purchase</h3>
    </body>
</html>