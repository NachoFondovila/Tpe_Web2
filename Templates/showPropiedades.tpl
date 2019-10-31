{include file="header.tpl"}

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Propiedades en {$inmobiliaria->ciudad}</span>
</nav>

<div class="propiedades">
      {if $propiedades != null}
    {foreach from=$propiedades item=$propiedad}
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/{$propiedad->imagen}">
            <div class="card-body">
                <h5 class="card-title">En {$propiedad->estado}</h5>
                {* <p class="card-text">Propiedad ubicada en la calle {$propiedad->direccion} en la ciudad de {$inmobiliaria->ciudad}</p> *}
                {if ($iniciado)}
                    <a class="btn btn-primary" href="{$base}propiedad/{$propiedad->id}/eliminar">Eliminar</a>
                {/if}
                    <a class="btn btn-primary"href="{$base}propiedad/{$propiedad->id}">Ver detalles</a>
            </div>
        </div>
    {/foreach}
      {else}
        <h3>Aún no hay propiedades disponibles en esta inmobiliaria</h3>
      {/if}
</div>

{if isset($iniciado)}
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Agregar Propiedad</span>
    </nav>

    <form class="p-4" action="add/{$inmobiliaria->id}" method="POST">
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
            <input name="image" type="text" class="form-control" id="exampleDropdownFormEmail2" >
        </div>
        <button type="submit" class="btn btn-primary">AGREGAR</button>
    </form>
{/if}

{include file="footer.tpl"}