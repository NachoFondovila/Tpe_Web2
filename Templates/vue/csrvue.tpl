{literal}
<section id="tpl_VUE">
    <h3>
        {{subtitle}}
    </h3>
    <ul>
        <li v-for="coment in coments">
            {{coment.asunto}}
            {{coment.descripcion}}
            <span v-if="inicializado != false">
                <a href="borrarComent/{{coment.id}}">Eliminar</a>
            </span>
        </li>
    </ul>
{/literal}