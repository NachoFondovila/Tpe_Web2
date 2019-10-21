{include file="header.tpl"}
   
    <h1>Inmobiliarias</h1>

<ul>
    {foreach from=$inmobiliarias item=$inmobiliaria}
        <a href="{$base}propiedades/{$inmobiliaria->id}"><li>{$inmobiliaria->ciudad}</li></a>
    {/foreach}
</ul>

{if ! $iniciado}
{include file="verifyUser.tpl"}
{/if}
{include file="footer.tpl"}