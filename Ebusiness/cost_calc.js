/* global $ */

function calcSub(){
    var argSubtotal;



    
    if(document.getElementById('Salesforce').checked) {
        argSubtotal = 100;
    }
    if(document.getElementById('AWS').checked) {
    argSubtotal = 300;
}
    if(document.getElementById("Cloud 9").checked) {
    argSubtotal = 200;
}
    if(document.getElementById("Gmail").checked) {
    argSubtotal = 400;

}

display(argSubtotal); 

}



function display(parm1){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
    
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}




function vatCalc (argSubtotal) {
	var VAT ;
}
