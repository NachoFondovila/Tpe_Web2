{include file="header.tpl"}

<ul>
    {foreach from=$inmobiliarias item=$inmobiliaria}
        <a href="{$base}propiedades/{$inmobiliaria->id}"><li>{$inmobiliaria->ciudad}</li></a>
    {/foreach}
</ul>

{include file="footer.tpl"}