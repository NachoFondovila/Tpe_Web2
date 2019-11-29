<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Agregar Inmobiliaria</span>
</nav>

<form class="p-4" action="addInm" method="POST">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ciudad</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="ciudad" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Encargado</label>
        <input name="encargado" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Dirección</label>
        <input name="direc" type="text" class="form-control" id="exampleDropdownFormPassword2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Contacto</label>
        <input name="contact" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Modificar Inmobiliaria</span>
</nav>

<form class="p-4" action="updateInmo" method="POST">
        <label>Inmobiliaria a Modificar</label>
            <select name="IDI">
            {foreach from=$inmobiliarias item=inmobiliaria}
                <option value={$inmobiliaria->id}>{$inmobiliaria->ciudad}</option>
            {/foreach}
            </select>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ciudad</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="city" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Encargado</label>
        <input name="encargado" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Dirección</label>
        <input name="direc" type="text" class="form-control" id="exampleDropdownFormPassword2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Contacto</label>
        <input name="contact" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <button type="submit" class="btn btn-primary">Modificar</button>
</form>
