<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Logearse</span>
</nav>

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
