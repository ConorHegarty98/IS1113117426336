<!DOCTYPE html>
<html>
 
 <head>
    <title>Select Product</title>
    <meta charset = "UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    </script>
    <link rel="stylesheet" href="ebus.css" type="text/css"/>
 
 </head>

 <body>
    <!-- Page Content -->
    <h1 class="title">Select a product</h1>
 
 
 
    <form method="POST" action="Ebus2.php">

    <!-- Radio Buttons -->
    <label for="salesforce" class="salesforce1">
    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
    Salesforce @ $100
    </label>
 

    <br/>
 
    <label for="Cloud9" class="c91">
    <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
    Cloud 9 @ $200
    </label>
 
    <br/>
 
    <label for="aws" class="aws1">
    <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
    Amazon Web Services @ $300
    </label>
 

 
    <br/>
 
    <label for="Gmail" class="gmail1">
    <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
    Gmail @ $400
 
 
    </label>

 
    <br/>
    <br/>
 
    <h3 class="title2"> Breakdown</h3>
    <!-- Breaking down price -->
    <label for="subtotal" class="subtotal">
    Sub Total $
    <input type="text" id="subtotal" value="0.00" name="subtotal" readonly/>
    </label>
 
    <br/> 
    <br/>
 
 
    <label for="discount" class="discount">
    Discount @5% $
    <input type="text" id="discount" name="discount" value="0.00" readonly/>
    </label>
 
    <br/> 
    <br/>
 
 
    <label for="vat" class="vat">
    VAT @10% $
    <input type="text" id="vat" value="0.00" readonly/>
    </label>
 
    <br/> 
    <br/>
 
 
    <label for="total" class="total">
    Total $
    <input type="text" id="total" name="total" value="0.00" readonly/>
    </label>
 
    <br/> 
    <br/>
 
    <button type="submit" class="btnProceed" id="btnProceed" disabled>Add to Shopping Cart</button>
 
    </form>
 
    <br/>
    <!-- Button -->
    <button class ="button_1" onClick="calcSub()";"calcDisVatTotal()";>Calculate Cost</button>
    <a class="cancel" rule="button" class="cancel hover" href="Ebus1.php">Clear Choice</a>
 
 
 </body>
</html><!DOCTYPE html>
<html>
 
 <head>
    <title>Select Product</title>
    <meta charset = "UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    </script>
    <link rel="stylesheet" href="ebus.css" type="text/css"/>
 
 </head>

 <body>
    <!-- Page Content -->
    <h1 class="title">Select a product</h1>
 
 
 
    <form method="POST" action="Ebus2.php">

    <!-- Radio Buttons -->
    <label for="salesforce" class="salesforce1">
    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
    Salesforce @ $100
    </label>
 

    <br/>
 
    <label for="Cloud9" class="c91">
    <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
    Cloud 9 @ $200
    </label>
 
    <br/>
 
    <label for="aws" class="aws1">
    <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
    Amazon Web Services @ $300
    </label>
 

 
    <br/>
 
    <label for="Gmail" class="gmail1">
    <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
    Gmail @ $400
 
 
    </label>

 
    <br/>
    <br/>
 
    <h3 class="title2"> Breakdown</h3>
    <!-- Breaking down price -->
    <label for="subtotal" class="subtotal">
    Sub Total $
    <input type="text" id="subtotal" value="0.00" name="subtotal" readonly/>
    </label>
 
    <br/> 
    <br/>
 
 
    <label for="discount" class="discount">
    Discount @5% $
    <input type="text" id="discount" name="discount" value="0.00" readonly/>
    </label>
 
    <br/> 
    <br/>
 
 
    <label for="vat" class="vat">
    VAT @10% $
    <input type="text" id="vat" value="0.00" readonly/>
    </label>
 
    <br/> 
    <br/>
 
 
    <label for="total" class="total">
    Total $
    <input type="text" id="total" name="total" value="0.00" readonly/>
    </label>
 
    <br/> 
    <br/>
 
    <button type="submit" class="btnProceed" id="btnProceed" disabled>Add to Shopping Cart</button>
 
    </form>
 
    <br/>
    <!-- Button -->
    <button class ="button_1" onClick="calcSub()";"calcDisVatTotal()";>Calculate Cost</button>
    <a class="cancel" rule="button" class="cancel hover" href="Ebus1.php">Clear Choice</a>
 
 
 </body>
</html>