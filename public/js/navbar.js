function OnJson(json){
    const username = document.querySelector('#username'); 
    username.textContent = json.username; 

}

function onResponse(response){
    return response.json(); 
}

fetch('/get_Info_User').then(onResponse).then(OnJson);