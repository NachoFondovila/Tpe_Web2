"use strict";

document.addEventListener("DOMContentLoaded",function(){
    let error="error";
    
    
    let app=new Vue({
        el:"#tpl_VUE",
        data:{
            subtitle:'Comentarios',
            comentarios:[],
            porcentaje: [],
            admin: false,
            data: this,
        },
        methods: {
            elim: function(id_comentario){//elim =nombre del button, parametro de vue
                eliminar(id_comentario);//funcion de js
            }
          }
    });

    let admin = document.getElementById("admin");

    if(admin){
        app.admin=true;
    }    
    
    let form = document.getElementById("form-coments");
    if(form != null){
        form.addEventListener('submit',function addComent(e){
            e.preventDefault();
            let idProp=document.getElementById("id_prop").value;
            let data= {
                id_prop: document.getElementById("id_prop").value,
                id_user: document.getElementById("user_id").value,
                puntuacion: document.getElementById("puntuacion").value,
                comentario: document.getElementById("comentario").value,
            }
            
            fetch('../api/addCom', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},       
                body: JSON.stringify(data) 
            })
            .then(response => {
                getComents(idProp);
                getPorcent(idProp);
            })
            .catch(error => console.log(error));
        })
    }

    function getComents(id_prop){
        fetch("../api/getComments/"+id_prop)
        .then(response => response.json())
        .then(coments => {
            app.comentarios= coments; // similar a $this->smarty->assign("tasks", $tasks)
        })
        .catch(erro=>console.log(erro));
    }

    function getPorcent(id_prop){
        fetch("../api/porcent/"+id_prop)
        .then(response => response.json())
        .then(porcent => {
            app.porcentaje= porcent;
        }) 
        .catch(erro=>console.log(erro));
    }

    function eliminar(id_coment) {
        event.preventDefault();
        let idProp= document.querySelector("#id_prop").value;
        fetch('../api/elimComent/' +id_coment, {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'},
        })
        .then(response => {
            console.log(idProp);
            getComents(idProp);
            getPorcent(idProp);
        })
        .catch(err => console.log(err));
    }

    // function getComent(id_coment){
    //     fetch("../api/getComent/"+id_coment)
    //     .then(response => response.text())
    //     .then(coment => {
    //         app.data= coment; // similar a $this->smarty->assign("tasks", $tasks)
    //         console.log(coment.id);
    //     })
    //     .catch(console.log(error));
    // }

    let id=document.getElementById("id_prop").value;
    getComents(id);
    getPorcent(id);
})