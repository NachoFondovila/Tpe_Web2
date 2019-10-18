{include file="header.tpl"}

<ul>
    {foreach from=$propiedades item=$propiedad}
        {* <li> {$propiedad->imagen}</li> *}
        <li> Direccion: {$propiedad->direccion}</li>
        <li> Tipo: {$propiedad->tipo}</li>
        <li> Estado {$propiedad->estado}</li>
        <li>
            <a href="{$base}propiedades/eliminar/{$propiedad->id}">eliminar</a>
        </li>
    {/foreach}
</ul>

<form action="add/{$id}" method="POST">
        
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
        
        <button type="submit"> AGREGAR propiedad </button>

    </form>


{include file="footer.tpl"}