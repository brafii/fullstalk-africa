let password = document.getElementById('password');
let message = document.getElementById('message');
let strength = document.getElementById('strength');


password.addEventListener("input", function(){ 
    
    if(password.value.length > 0){
        message.style.display = 'block';
    }
    else{
        message.style.display = 'none';
    }

    if(password.value.length < 4){
        strength.innerHTML = 'weak';
        message.style.color = '#FF0000';
    }
    else if(password.value.length >= 4 && password.value.length < 8){
        strength.innerHTML = 'medium';
        message.style.color = '#FFA500';
    }
    else if(password.value.length >= 8){
        strength.innerHTML = 'strong';
        message.style.color = '#00FF00';
    }


});