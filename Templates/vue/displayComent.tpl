{literal}
    <section id="tpl_VUE">   
    <span v-if= "porcentaje.promedio == 5">
        <img src="https://img.icons8.com/offices/48/000000/star.png">
    </span>
    <span v-if= "porcentaje.promedio == 2.50">
        <img src="https://img.icons8.com/color/48/000000/star-half.png">
    </span>
    <h3> {{subtitle}}</h3>
        <ul>
            <li>
                <span>porcentaje: {{porcentaje.promedio}}</span>
            </li>

            <li v-for="comentario in comentarios">
                <span> usuario: {{comentario.id_user_fk}}</span>
                <span> comentario: {{comentario.comentario}}</span>
                <span v-if= "admin == true">
                    <a href="#" @click ="elim(comentario.id)" >eliminar comentario</a>
                </span>
            </li>
        </ul>


    </section>
{/literal}