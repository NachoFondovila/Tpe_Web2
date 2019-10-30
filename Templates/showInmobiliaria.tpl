{include file="header.tpl"}

<h1>Inmobiliarias</h1>

<ul>
    {foreach from=$inmobiliarias item=$inmobiliaria}
        <a href="{$base}propiedades/{$inmobiliaria->id}"><li>{$inmobiliaria->ciudad}</li></a>
        {if ($iniciado)}
            <a href="{$base}inmobiliaria/eliminar/{$inmobiliaria->id}/">Eliminar</a>
        {/if}
    {/foreach}
</ul>



{if !($iniciado)}
    {include file="verifyUser.tpl"}
    {else}
    {include file="adminInmobiliaria.tpl"}
{/if}

{include file="footer.tpl"}