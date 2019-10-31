<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {$css}
        <title>{$title}</title>
    </head>
    <body>
        <div class="logo">
            <a href= "http://localhost/GitHub/Tpe_Web2/ver"> <h2>Inicio</h2> </a>
            {$Logo}
        </div>
            <ul class="nav nav-tabs">
                {if !($iniciado)}
                <li class="nav-item">
                    <a class="nav-link active">Visitante</a>
                    <a href="{$base}login" class="nav-link">Registrarse</a>
                    {else}
                    <a class="nav-link active">{$iniciado}</a>
                    <a class="nav-link" href="{$base}logout">Cerrar Sesión</a>
                </li>
                {/if}
            </ul>