"use strict"
let apiURL="http://anabel-altuna-coment.com/api/coments";

let app=new Vue({
    el:"#tpl_VUE",
    data:{
        subtitle:'subtitulo',
        comments:[getComents()],
        inicializado: true,
    }
})

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