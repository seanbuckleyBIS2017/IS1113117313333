/* global $ */

function calcSub(){
    var argSubtotal
    
    if(document.getElementById('salesforce').checked) {
        argSubtotal = 100;
    }
else {
    argSubtotal = 300;
}

display(argSubtotal);

}


function display(parm1){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1
    
    enablebtnproceed();
}


function enablebtnproceed(){
    $('#btnproceed').prop('disabled', false);
}

function disablebtnproceed(){
    $('#btnproceed').prop('disabled', true);
}