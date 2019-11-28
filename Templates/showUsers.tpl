{include file="header.tpl"}
<ul class="users">
    {foreach from=$users item=$usuario }
    <div class="cajaUser">
        <li class="list-group-item">
            <label class="userAdmin">Nombre: </label>        
            {$usuario->nombre}
        </li>
        <li class="list-group-item">
            <label class="userAdmin">Mail: </label>        
            {$usuario->mail}
        </li>
        <li class="list-group-item">
            <label class="userAdmin">Ciudad: </label>        
            {$usuario->ciudad}
        </li>
        <li class="list-group-item">
            <label class="userAdmin">Nivel de Administración: </label>   
            {if ($usuario->habilitado)}
                <p>Usuario Administrador</p>
            {else}
                <p>Usuario Registrado</p>
            {/if}
        </li>
        {if !($usuario->habilitado)}
            <li class="list-group-item">
                <form action="{$base}adminUser/{$usuario->id}/1" method="POST">
                    <button type="submit" class="btn btn-primary">Hacer Administrador</button>
                </form>
            </li>
        {elseif ($user['USERNAME'])!=$usuario->nombre}
            <li class="list-group-item">
                <form action="{$base}adminUser/{$usuario->id}/0" method="POST">
                    <button type="submit" class="btn btn-primary">Deshabilitar permisos de Administrador</button>
                </form>
            </li>
        {/if}
        {if ($user['USERNAME'])!=($usuario->nombre)}
            <li class="list-group-item">
                <a href="{$base}deleteUser/{$usuario->id}">Eliminar Usuario</a>
            </li>
        {/if}
    </div>
    {/foreach}
</ul>
{include file="footer.tpl"}