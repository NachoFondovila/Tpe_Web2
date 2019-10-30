{include file="header.tpl"}
<ul>
    <li> Direccion: {$propiedad->direccion}</li>

    <li> Tipo: {$propiedad->tipo}</li>
    
    <li> Estado {$propiedad->estado}</li>

</ul>

{if isset($iniciado)}

    <form action="update/:{$propiedad->id}" method="POST">

        <h4>Modificar propiedad</h4>
        
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
            <input name="state" type="text">
        </div>
        <div class=" row"> 
            <label>Imagen</label>
            <input name="image" type="text">
        </div>
        
        <button type="submit"> Modificar </button>

    </form>
{/if}

{include file="footer.tpl"}