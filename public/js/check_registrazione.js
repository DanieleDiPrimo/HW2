function checkName(){
    box_error.innerHTML = '';

    if(nome.value.trim() == ''){
        const error = document.createElement('h1'); 
        error.textContent = "IL NOME NON PUO' ESSERE VUOTO";
        box_error.appendChild(error); 
        
    }else{
        if( /^[a-zA-Z]{1,15}$/.test(nome.value.trim()) == false){
            //sono stati utilizzati nell'inserimento del nome underscore numeri o altri caratteri
            const error = document.createElement('h1'); 
            error.textContent = "IL NOME NON PUO' CONTENERE CARATTERI SPECIALI";           
            box_error.appendChild(error);
            
        }
    }
}

function checkCognome(){

    box_error.innerHTML = '';

    if(cognome.value.trim() == ''){
        const error = document.createElement('h1'); 
        error.textContent = "IL COGNOME NON PUO' ESSERE VUOTO";
        box_error.appendChild(error); 
        
    }else{
        if( /^[a-zA-Z]{1,15}$/.test(cognome.value.trim()) == false){
            //sono stati utilizzati nell'inserimento del nome underscore numeri o altri caratteri
            const error = document.createElement('h1'); 
            error.textContent = "IL COGNOME NON PUO' CONTENERE CARATTERI SPECIALI";
            box_error.appendChild(error);        
            
        }
    }

}

function checkUsername(){

    box_error.innerHTML = '';

    if(username.value.trim() == ''){
        const error = document.createElement('h1'); 
        error.textContent = "L'USERNAME NON PUO' ESSERE VUOTO";       
        box_error.appendChild(error); 
        
    }else{
        if( /^[a-zA-Z0-9_]{1,15}$/.test(username.value.trim()) == false){
            //sono stati utilizzati nell'inserimento del caratteri speciali non consentiti
            const error = document.createElement('h1'); 
            error.textContent = "L'USERNAME NON PUO' CONTENERE CARATTERI SPECIALI";      
            box_error.appendChild(error);
            
        }

    }

}

function checkEmail(){

    box_error.innerHTML = '';

    if(email.value.trim() == ''){
        const error = document.createElement('h1'); 
        error.textContent = "IL CAMPO EMAIL NON PUO' ESSERE VUOTO";     
        box_error.appendChild(error); 
        
    }else{
        if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email.value.trim()) == false){
            const error = document.createElement('h1'); 
            error.textContent = "FORMATO EMAIL NON VALIDO";      
            box_error.appendChild(error);
        }

        
    }
}

function checkPassword(){

    box_error.innerHTML = '';
    
    if(password.value.trim() == ''){
        const error = document.createElement('h1'); 
        error.textContent = "CAMPO PASSWORD NON PUO' ESSERE VUOTO"; 
        box_error.appendChild(error); 
    }else{

        if(password.value.length <= 6){
            const error = document.createElement('h1'); 
            error.textContent = "PASSWORD TROPPO CORTA. MINIMO 6 CARATTERI";
            box_error.appendChild(error);
        }else{
            if( /^[a-zA-Z0-9_]{1,15}$/.test(password.value.trim()) == false){
            //sono stati utilizzati nell'inserimento del caratteri speciali non consentiti
            const error = document.createElement('h1'); 
            error.textContent = "PASSWORD NON PUO' CONTENERE I CARATTERI SPECIALI INSERITI";
            box_error.appendChild(error);
            }
        }

    }

}




const box_error = document.querySelector("#errore");

const nome = document.querySelector(".nome"); 
nome.addEventListener('blur', checkName);

const cognome = document.querySelector(".cognome"); 
cognome.addEventListener('blur', checkCognome);

const email = document.querySelector(".email"); 
email.addEventListener('blur', checkEmail); 

const username = document.querySelector(".username");
username.addEventListener('blur', checkUsername); 

const password = document.querySelector(".password"); 
password.addEventListener('blur', checkPassword); 





