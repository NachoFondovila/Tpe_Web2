{literal}
    <section id="tpl_VUE">   
    <span v-if= "porcentaje.promedio == 5">
        <img src="https://img.icons8.com/offices/48/000000/star.png">
    </span>
    <span v-if= "porcentaje.promedio == 2.50">
        <img src="https://img.icons8.com/color/48/000000/star-half.png">
    </span>
    <div class="comentarios">
        <div>
        <h2 class= "subtComent"> {{subtitle}}</h2>
        <h3>
            <span class="prom">Promedio: {{porcentaje.promedio}}</span>
        </h3>
        </div>
            <ul class="showCom">
                <li v-for="comentario in comentarios">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-success">
                            <span> Usuario: {{comentario.nombre_user}}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Puntuación: {{comentario.puntuacion}}</h5>
                            <p class="card-text"><span>{{comentario.comentario}}</span></p>
                        </div>
                        <div class="card-footer bg-transparent border-success">
                            <span v-if= "admin == true">
                                <a href="#" @click ="elim(comentario.id)" >Eliminar comentario</a>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
    </div>


    </section>
{/literal}