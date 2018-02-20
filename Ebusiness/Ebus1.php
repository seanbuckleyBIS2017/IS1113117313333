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
        
        
        <label for="Salesforce">
        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
         Salesforce @ $100
        </label>
        
        <br/>
        
        <label for="AWS">
            <input type ="radio" id="AWS" name="product" onCLick="disablebtnProceed()"/>
            AWS @ $300
        </label>
           
            <br/>
           
             <label for="Cloud 9">
            <input type ="radio" id="Cloud 9" name="product" onCLick="disablebtnProceed()"/>
            Cloud 9 @ $200
        </label>
        
         <br/>
         
          <label for="Gmail">
            <input type ="radio" id="Gmail" name="product" onCLick="disablebtnProceed()"/>
            Gmail @ $400
        </label>
       
        <br/>
        <br/>
        
        <label for="subtotal">
            Sub Total: 
            <input type="text" id="subtotal" value="0.00" readonly/>
        </label>
            
            <br/>
            <br/>
            
             <label for="VAT">
            Total:
            <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
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
