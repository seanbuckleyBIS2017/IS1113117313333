<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
    
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type ="text/javascript" src ="cost_calc.js"></script>
        
         
        
    </head>
    <body>
        
        <body  style="background-color:#93B874; text-align:center" >
        
        <h3 Select Product </h3>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
        
        
        <label for="salesforce">
        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
         Salesforce @ $100
        </label>
        
        <br/>
        
        <label for="aws">
            <input type ="radio" id="aws" name="product" onCLick="disablebtnProceed()"/>
            AWS @ $300
        </label>
           
            <br/>
            <br/>
            
        <label for="subtotal">
            Sub Total: 
            <input type="text" id="subtotal" value="0.00" readonly/>
        </label>
            
            <br/>
            <br/>
            
        <label for="total">
            Total:
            <input type="text" id="total" name="total" value="0.00" readonly/>
        </label>    
            
        <br/>    
        
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Cost</button>
        
        <a role="button" href="Ebus1.php">Clear Choice</a>
         
        
    </body>
    
    
</html>
