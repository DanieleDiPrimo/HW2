function onJsonVR(json){
    console.log(json);

    const ul = document.querySelector(".info");; 
    ul.innerHTML = ""; 

    if(json == 0){
    
        const div = document.querySelector(".banner"); 

        const span = document.createElement("span"); 
        span.textContent = "Ancora nessuna richiesta!"; 
        span.classList.add("bannER"); 

        div.appendChild(span);
    }else{
        for(const elementi of json){
             
            const li = document.createElement("li"); 
            li.textContent = elementi.user_main + " VUOLE GIOCARE CON TE A: " + elementi.titolo; 

            ul.appendChild(li);
        }
    }

}


function onResponseVR(response){
    return response.json();
}

fetch("/get_richieste").then(onResponseVR).then(onJsonVR);

