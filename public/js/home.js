//Codice js che mi permette di avere un record di tutti i giochi che possono essere aggiunti
//purtroppo questa API non ha un URL che gestisce la ricerca del gioco per nome gioco, ma solo per id che non conosco a prescindere.Mi conservo quindi tutto in una vettore e gestisco tutto da li. So che è inefficiente ma non ho trovato un'altra API funzionante
function OnJson(json){
    console.log(json);
    const username = document.querySelector('#username'); 
    username.textContent = json.username; 
    console.log("" + json.username);

}


const doc = []; 
function OnApiJson(json){
    
    console.log(json);

    for(let i = 0; i < json.length; i++){
        doc[i] = json[i];
        //console.log(" "+ doc[i].title);
    }
    
}

function onResponse(response){
    return response.json(); 
}

function prova(json){
    console.log(json);
}

function ResponseDelete(response){
    if(response.ok){
        console.log("T'appo");
        window.location.reload();
    }
}


function remove_game(event){
    console.log(event.currentTarget.name);

    //devo controllare se c'è un gioca con me inerente a questo gioco 
    fetch("/rimuovi_post/" + event.currentTarget.name).then(ResponseDelete);
}

function gameSearch(event){

    event.preventDefault();

    box_error.innerHTML = "";

    let flag = 0;

    const game_input = document.querySelector("#gioco");
    const game_value = encodeURIComponent(game_input.value); 
    
    console.log(" " + game_value);
    
    for(let i = 0; i < doc.length; i++){
        if(doc[i].title == game_input.value){
            console.log("TROVATO");
            const url = "/add_post/" + doc[i].title + "/" + doc[i].id; 
            console.log(url);
            fetch(url).then(onResponse).then(prova); //mando i dati al server 
            flag=1;
        }
        
    }

    if(flag == 0){ 
        const errore = document.createElement("h1"); 
        
        errore.textContent = "MI DISPIACE, GIOCO NON TROVATO";
        errore.classList.add("gameError");
        
        box_error.appendChild(errore);
    }else{
        window.location.reload();
    }

}

function OnPostJson(json){

    console.log("Arrivo alla onjsonpost");
    console.log(json);

    
    const post_view = document.querySelector(".postview");
    post_view.innerHTML = "";

    for(const elementi of json){

        if(elementi != 0){

            console.log("json non nullo");

            const box_post = document.createElement("div"); 
            box_post.classList.add("box_post");

            var remove_button = document.createElement('input');
            remove_button.setAttribute('type','button');
            remove_button.setAttribute('name','' + elementi.titolo);
            remove_button.setAttribute('value', 'Rimuovi Gioco');
            remove_button.addEventListener('click', remove_game);
        
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
            box_post.appendChild(remove_button);

            post_view.appendChild(box_post);
        }
    
    }

}

const box_error = document.querySelector("#gamenotfound");
const form = document.querySelector("form");
form.addEventListener('submit' , gameSearch);

fetch('/get_Info_User').then(onResponse).then(OnJson);
fetch('/api_games').then(onResponse).then(OnApiJson);
fetch('/lista_post').then(onResponse).then(OnPostJson);

