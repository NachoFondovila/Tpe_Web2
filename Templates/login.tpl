{include file="header.tpl"}

<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Registración</span>
</nav>

<form class="p-4" action="addUser" method="POST">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Nombre</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="username" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ingrese email</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="email" placeholder="email@example.com">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Contraseña</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ciudad</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="ciudad" placeholder="Ciudad">
    </div>
    <button type="submit" class="btn btn-primary">Registrarme</button>
</form>

{include file="footer.tpl"}