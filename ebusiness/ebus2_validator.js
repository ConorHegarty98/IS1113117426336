/* global $ */
function validateDetails(){
    
    var pin;
    
    pin= document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert ("Please make sure you PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
    
function disablebtnPurchase(){
    $('#btnPurcahse').prop('disabled', true);
}