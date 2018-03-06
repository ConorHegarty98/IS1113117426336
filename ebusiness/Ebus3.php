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
    
    <body class="body3">
        <h2>RECEIPT</h2>
        <br>
        <br>
        <?php
        // Echo session variables that were set on previous page
        echo "Name " . $_POST["name"] . "<br>";
        echo "Email " . $_POST["email"] . "<br>";
        echo "Total is " . $_SESSION{"total"} . ".";
        ?>
        <h3>Thanks for your purchase</h3>
    </body>
</html>