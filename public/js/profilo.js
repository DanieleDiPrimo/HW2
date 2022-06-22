function OnJson(json){

    const nome = document.querySelector("#nome");
    const cognome = document.querySelector("#cognome"); 
    const email = document.querySelector("#email"); 
    const username = document.querySelector("#username2"); 

    nome.textContent = "NOME: " + json.nome; 
    cognome.textContent = "COGNOME: " + json.cognome; 
    email.textContent = "EMAIL: " + json.email; 
    username.textContent = "USERNAME: " + json.username; 

    if(json.url_img != null){
        const div = document.querySelector("#conteiner_img"); 
        const img = document.createElement("img"); 

        img.src = json.url_img; 

        div.appendChild(img); 
    }

}

function OnResponse(response){
    return response.json();
}

fetch("/get_Info_User").then(OnResponse).then(OnJson);
