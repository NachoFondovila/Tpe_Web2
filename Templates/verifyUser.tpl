
    <h3>LOGUEARSE</h3>
<form class="p-4" action="verify" method="POST">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ingrese email</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="username" placeholder="email@example.com">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Contraseña</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

    {if isset($error)} 
        <div role="alert">
            {$error}
        </div>
    {/if}

<a href="{$base}login"><p>Registrarse</p></a>

{* <h3>LOGUEARSE</h3>
<form action="verify" method="POST">
    <label>Usuario (email)</label>
    <input type="email" name="username" placeholder="Ingrese email">
        
    <label>Password</label>
    <input type="password" name="password" placeholder="Password">

    {if isset($error)} 
        <div role="alert">
            {$error}
        </div>
    {/if}

    <button type="submit" >Ingresar</button>
</form>

<a href="{$base}login"><p>Logearse</p></a> *}
