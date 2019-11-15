{include file="header.tpl"}
    <ul class="list-group">
        <li class="list-group-item">Dirección: {$propiedad->direccion}</li>
        <li class="list-group-item">Tipo: {$propiedad->tipo}</li>
        <li class="list-group-item">Estado: {$propiedad->estado}</li>
        {if isset($iniciado)}
        
            {for $i=0 to $cant_im -1}
                <li class="list-group-item">Link de Imagen: {$imgs[$i]->ruta}</li>
            {/for}

        {/if}
    </ul>
    

{if isset($iniciado)}

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Agregar imagen</span>
</nav>

<form class="p-4" action="{$propiedad->id}/addimage" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Imagen</label>
        <input name="imago" type="file" class="form-control" id="exampleDropdownFormEmail2" multiple>
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
{include file="vue/addComent.tpl"}

{include file="footer.tpl"}