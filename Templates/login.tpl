{include file="header.tpl"}

<h3>Registracion</h3>

    <form action="addUser" method="POST">

        <input type="username" name="username" placeholder="Ingrese su nombre">
        <input type="email"    name="email" placeholder="Ingrese su email">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="text"  name="ciudad" placeholder="Ingrese su ciudad">

        <button type="submit">Registrarme</button>
    </form>

{include file="footer.tpl"}