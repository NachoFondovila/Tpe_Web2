{include file="header.tpl"}

<h1>propiedades en {$inmobiliaria->ciudad}</h1>

<ul>
    {foreach from=$propiedades item=$propiedad}

        <img src="img/casabalcarce4.jpg">
        <li>
            <p>   direccion: {$propiedad->direccion} </p>
            
            {if ($iniciado)}
            <a href="{$base}propiedades/eliminar/{$propiedad->id}/{$inmobiliaria->id}/">Eliminar</a>
            -_-
            {/if}
            <a href="{$base}propiedad/{$propiedad->id}/">Ver detalles</a>
        </li>

    {/foreach}
</ul>

{if isset($iniciado)}

<form action="add/:{$id}" method="POST">
        <h4>Agregar propiedad</h4>
        
        <div class=" row"> 
            <label>direccion</label>
            <input name="direc" type="text">
        </div>
        <div class=" row"> 
            <label>tipo</label>
            <input name="type" type="text">
        </div>
        <div class=" row"> 
            <label>Estado</label>
            <input name="estate" type="text">
        </div>
        <div class=" row"> 
            <label>Imagen</label>
            <input name="image" type="file">
        </div>
        
        <button type="submit"> AGREGAR </button>

    </form>
{/if}

{include file="footer.tpl"}