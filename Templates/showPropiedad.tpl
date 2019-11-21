{include file="header.tpl"}
    <ul class="list-group">
        <li class="list-group-item">Dirección: {$propiedad->direccion}</li>
        <li class="list-group-item">Tipo: {$propiedad->tipo}</li>
        <li class="list-group-item">Estado: {$propiedad->estado}</li>
        {if ($user['USER_TYPE'])}
            {for $i=0 to $cant_im -1}
                <li class="list-group-item">Link de Imagen: {$imgs[$i]->ruta}</li>
                <a class="btn btn-primary" href="{$propiedad->id}/elim/{$imgs[$i]->id}">Eliminar</a>
            {/for}
        {else}
                {for $i=0 to $cant_im -1}
                    {if $imgs[$i]->id_propiedad_fk == $propiedad->id }
                        <img class="card-img-top" src="../{$imgs[$i]->ruta}">
                    {/if}
                {/for} 
        {/if}
    </ul>
    

{if ($user['USER_TYPE'])}

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Agregar imagen</span>
</nav>

<form class="p-4" action="{$propiedad->id}/addimage" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Imagen</label>
        <input name="imago[]" type="file" class="form-control" id="exampleDropdownFormEmail2" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>


<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Modificar Propiedad</span>
</nav>

<form class="p-4" action="{$propiedad->id}/update" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Dirección</label>
            <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="direc" >
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Tipo</label>
            <input name="type" type="text" class="form-control" id="exampleDropdownFormEmail2" >
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword2">Estado</label>
            <input name="state" type="text" class="form-control" id="exampleDropdownFormPassword2" >
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Imagen</label>
            <input name="image" type="file" class="form-control" id="exampleDropdownFormEmail2" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
</form> 
{/if}

{if ($user['USERNAME'] && $user['USER_TYPE'] == 0)}
    <form class="p-4" id="form-coments" action="addCom" method=POST>

        <label for="exampleDropdownFormEmail2">Puntuacion</label>
        <select class="form-group" id="puntuacion" name="puntuacion">
            <option value="1">1</option>            
            <option value="2">2</option>            
            <option value="3">3</option>            
            <option value="4">4</option>            
            <option value="5">5</option>            
        </select>

        {* <input class="form-group" id="fecha" type="datetime-local" name="fecha"> *}
        <input id="id_prop" type="hidden" value={$propiedad->id}>

        <label for="exampleDropdownFormEmail2">Comentario</label>
        <textarea class="form-group" id="comentario" name="comentario" rows="5"></textarea>
         
        <button type="submit" class="btn btn-primary">Comentar</button>

    </form>

    {* {include file="vue/addComent.tpl"} *}
{/if}

{include file="footer.tpl"}