{include file="header.tpl"}

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Inmobiliarias</span>
</nav>

<ul class="inmobiliarias">
    {foreach from=$inmobiliarias item=$inmobiliaria}
        <a href="{$base}inmobiliaria/{$inmobiliaria->id}"><li>{$inmobiliaria->ciudad}</li></a>
        {if ($user['USER_TYPE'])}
            <a href="{$base}inmobiliaria/eliminar/{$inmobiliaria->id}" class="btn btn-outline-danger">Eliminar</a>
        {/if}
    {/foreach}
</ul>

{if !($user)}
    {include file="verifyUser.tpl"}
    {elseif ($user['USER_TYPE'])}
        {include file="adminInmobiliaria.tpl"}
{/if}


{include file="vue/csrvue.tpl"}
{include file="footer.tpl"}