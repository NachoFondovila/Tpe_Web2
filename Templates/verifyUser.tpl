        <h3>LOGUEARSE</h3>
    <form action="verify" method="POST">

            <label>Usuario (email)</label>
            <input type="email" name="username" placeholder="Ingrese email">
        
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">

        {if $error} 
            <div class="alert" role="alert">
                {$error}
            </div>
         {/if}

        <button type="submit" >Ingresar</button>
    </form>

<a href="{$base}login"><p>Logearse</p></a>
