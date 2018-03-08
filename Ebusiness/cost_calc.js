/* global $ */

var argSubTotal;
var DiscountAmt;
var VatAmt;
var totalPrice;


function calcSub(){
    
     if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
     }else if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
    }else if(document.getElementById('cloud9').checked) {
        argSubTotal = 200;
    }else if (document.getElementById('aws').checked) 
        argSubTotal = 300;
    
    calcDisVatTotal();
}
        
  

function calcDisVatTotal(parmSubTotal){
    
     if(document.getElementById('salesforce').checked) {
      DiscountAmt = 5;
      VatAmt = 9.5;
      totalPrice = 104.5
      
     }else if(document.getElementById('gmail').checked) {
     DiscountAmt= 20;
     VatAmt = 38;
     totalPrice = 418
    }else if(document.getElementById('cloud9').checked) {
        DiscountAmt= 10;
        VatAmt = 19;
        totalPrice = 209
    }else{
        DiscountAmt = 15;
        VatAmt= 28.5;
        totalPrice = 313.5
    }
        display(argSubTotal,DiscountAmt,VatAmt,totalPrice);
        enablebtnProceed();
}
    
      

function display(parm1,parm2,parm3,parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("Vat").value = parm3;
    document.getElementById("total").value = parm4;
    
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}






