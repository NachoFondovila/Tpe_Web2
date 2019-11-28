"use strict"

// let apiURL="http://anabel-altuna-coment.com/api/coments";

let app=new Vue({
        el:"#tpl_VUE",
        data:{
                id_prop= 'id_prop',
                subtitle:'subtitulo',
                comments:[getComents()],
                inicializado: true,
            }
        })
        
let form = document.getElementById("form-coments");
console.log(apiURL);
if(form != null){
    console.log(id_prop);
    form.addEventListener('submit',async function addComent(e){
        e.preventDefault();
        
        let data= {
            id_prop= document.getElementById("id_prop").value,
            id_user= document.getElementById("user_id").value,
            puntuacion= document.getElementById("puntuacion").value,
            comentario= document.getElementById("comentario").value,
        }
    })
}
async function getComents(){
    try{
        let rta = await fetch (apiURL);
        let jsons= await rta.json();
        console.log(jsons);
        // cargar();
    }
    catch(e){
        console.log(e);
    }
}

async function deleteComent(id){
    try{
        let rta= await fetch(apiURL + id,{
            "method": "DELETE"
        });
        let json= await rta.json();       
        // cargar();
    }
    catch(e){
    }
}
    
// ,{
//     "method": "POST",
//     "headers":{
//         "content-type": "application/json"
//     },
//     "body": JSON.stringify()
// }