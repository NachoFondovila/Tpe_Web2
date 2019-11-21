{include file="header.tpl"}
<ul>
    {foreach from=$users item=$usuario}
        <li class="list-group-item">
            <label>
                Nombre:
            </label>        
                {$usuario->nombre}
                Mail: {$usuario->mail}
                Ciudad: {$usuario->ciudad}
        </li>
        <li class="list-group-item">
            Nivel de administracion: 
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
    {/foreach}
</ul>
{include file="footer.tpl"}