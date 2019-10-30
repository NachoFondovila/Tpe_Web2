<form action="addInm" method="POST">

    <h4>Agregar Inmobiliaria</h4>
        
    <div class=" row"> 
        <label>Ciudad</label>
        <input name="ciudad" type="text">
    </div>
    <div class=" row"> 
        <label>Encargado</label>
        <input name="encargado" type="text">
    </div>
    <div class=" row"> 
        <label>Dirección</label>
        <input name="direc" type="text">
    </div>
    <div class=" row"> 
        <label>Imagen</label>
        <input name="image" type="file">
    </div>
    <button type="submit"> AGREGAR </button>

    <form action="updateInmo/:{$Inmobiliaria->id}" method="POST">

        <h4>Modificar Inmobiliaria</h4>
        
        <div class=" row"> 
            <label>Ciudad</label>
            <input name="city" type="text">
        </div>

        <div class=" row"> 
            <label>Direccion</label>
            <input name="direc" type="text">
        </div>

        <div class=" row"> 
            <label>Encargado</label>
            <input name="encargado" type="text">
        </div>
        <div class=" row"> 
            <label>Imagen</label>
            <input name="image" type="text">
        </div>
        
        <button type="submit"> Modificar </button>

    </form>

</form>