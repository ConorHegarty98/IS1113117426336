/* global $ */
function validateDetails(){
    
    var pin;
    var name;
    var email;
    
    pin= document.getElementById("user_pin").value;
    name=document.getElementById("name").value;
    email=document.getElementById("email").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert ("Please make sure you PIN is accurate");
    }
    else if(name == ""){
        alert("Please enter your name");
    }
    else if(email == ""){
        alert("Enter your email");
    }
        else{
        enablebtnPurchase();
    }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}    
    
function disablebtnPurchase(){
    $('#btnPurcahse').prop('disabled', true);
}