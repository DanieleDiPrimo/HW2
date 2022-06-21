function onJsonGCM(json){
    console.log(json);
    if(json == 0){
        esito = false; 
        stampaBanner(esito);
    }else{
        const esito = true;
        stampaBanner(esito);
    }
}

function stampaBanner(esito){
    div.innerHTML = ""; 

    const mess = document.createElement("span"); 

    if(esito == true){
    mess.textContent = "Richiesta inviata con successo!"; 
    mess.classList.add("bannOK");
    }else{
        mess.textContent = "La richiesta è stata già inviata";
        mess.classList.add("bannER");
    }
    div.appendChild(mess);
    window.scrollTo(0, 0);

}

function onJson(json){
    console.log(json);

    const post_view = document.querySelector(".postview");
    post_view.innerHTML = "";
    div.innerHTML = "";

    for(const elementi of json){
            
        console.log("json non nullo");

        const box_post = document.createElement("div"); 
        box_post.classList.add("box_post");

        var giocaConMe_button = document.createElement('input');
        giocaConMe_button.setAttribute('type','button');
        giocaConMe_button.setAttribute('name','' + elementi.titolo);
        giocaConMe_button.setAttribute('value', 'Gioca Con Me!');
        giocaConMe_button.addEventListener('click', GiocaConMe);
        
        
        const box_titolo = document.createElement("div");
        box_titolo.classList.add("box_titolo");

        const box_img = document.createElement("div"); 
        box_img.classList.add("box_img");

        const titolo = document.createElement("p");
        titolo.textContent = elementi.titolo; 

        const img = document.createElement("img"); 
        img.src = elementi.url_img;

        box_titolo.appendChild(titolo);
        box_img.appendChild(img); 

        box_post.appendChild(box_titolo);
        box_post.appendChild(box_img);
        box_post.appendChild(giocaConMe_button);

        post_view.appendChild(box_post);
        
    }
}

function GiocaConMe(event){ 

    const game = event.currentTarget.name; 
    const persona_input = document.querySelector("#persona");
    const persona_value = encodeURIComponent(persona_input.value);

    console.log("QUESTO UTENTE IN SESSIONE VUOLE GIOCARE ASSIEME A" + persona_value + "AL GIOCO" +game);
    
    fetch("/gioca_con_me/" + persona_value + "/" + game).then(onResponse).then(onJsonGCM); 
}

function onResponse(response){
    return response.json();
}


function CercaPersona(event){
    event.preventDefault();

    const persona_input = document.querySelector("#persona");
    const persona_value = encodeURIComponent(persona_input.value);

    const url = "/get_info_by_username/" + persona_value;
    console.log(url);

    fetch(url).then(onResponse).then(onJson); 
}

const form = document.querySelector(".cerca_profilo");
const div = document.querySelector(".banner"); 

form.addEventListener('submit', CercaPersona); 