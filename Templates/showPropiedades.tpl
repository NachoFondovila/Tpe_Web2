{include file="header.tpl"}

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Propiedades en {$inmobiliaria->ciudad}</span>
</nav>

<div class="propiedades">
    {if $propiedades != null}
        <div class="card" style="width: 30rem;">
            {foreach from=$propiedades item=$propiedad}
                <div class="cajaProp">
                    {if (isset($imgs))}
                        {for $i=0 to $cant_im -1}
                            {if $imgs[$i]->id_propiedad_fk == $propiedad->id }
                                <img class="card-img-top" src="../{$imgs[$i]->ruta}">
                            {/if}
                        {/for}
                    {/if}
                    <div class="card-body">
                        <h5 class="card-title">En {$propiedad->estado}</h5>
                        {if ($user['USER_TYPE'])}
                            <a class="btn btn-primary" href="{$base}propiedad/{$propiedad->id}/eliminar">Eliminar</a>
                        {/if}
                            <a class="btn btn-primary"href="{$base}propiedad/{$propiedad->id}">Ver detalles</a>
                    </div>
                </div>
            {/foreach}
        </div>
    {else}
        <h3>Aún no hay propiedades disponibles en esta inmobiliaria</h3>
    {/if}
</div>

{if ($user['USER_TYPE'])}
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Agregar Propiedad</span>
    </nav>

    <form class="p-4" action="add/{$inmobiliaria->id}" method="POST" enctype="multipart/form-data">
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
            <input name="image[]" type="file" class="form-control" id="exampleDropdownFormEmail2" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
{/if}

{include file="footer.tpl"}