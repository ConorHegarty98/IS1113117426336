<!DOCTYPE html>
<html>
 
 <head>
 <title>Select Product</title>
 <meta charset = "UTF-8">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="cost_calc.js"></script>
 </script>
 
</head>

 <body>
 <h1>Select a product</h1>
 
 
 
 <form method="POST" action="Ebus2.php">

 <label for="salesforce">
 <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
 Salesforce @ $100
 </label>
 

 <br/>
 
 <label for="Cloud9">
 <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
 Cloud 9 @ $200
 </label>
 
 <br/>
 
 <label for="aws">
 <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
 Amazon Web Services @ $300
 </label>
 

 
 <br/>
 
 <label for="Gmail">
 <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
 Gmail @ $400
 
 
 </label>

 
 <br/>
 <br/>
 
 <h3> Breakdown</h3>
 
 <label for="subtotal">
 Sub Total $
 <input type="text" id="subtotal" value="0.00" name="subtotal" readonly/>
 </label>
 
 <br/> 
 <br/>
 
 
 <label for="discount">
 Discount @5% $
 <input type="text" id="discount" name="discount" value="0.00" readonly/>
 </label>
 
 <br/> 
 <br/>
 
 
 <label for="vat">
 VAT @10% $
 <input type="text" id="vat" value="0.00" readonly/>
 </label>
 
 <br/> 
 <br/>
 
 
 <label for="total">
 Total $
 <input type="text" id="total" name="total" value="0.00" readonly/>
 </label>
 
 <br/> 
 <br/>
 
 <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
 
 </form>
 
 <br/>
 <button class ="button_1" onClick="calcSub()";"calcDisVatTotal()";>Calculate Cost</button>
 <a rule="button" class="cancel hover" href="Ebus1.php">Clear Choice</a>
 
 
 </body>
</html>