<?php
/* Smarty version 3.1.33, created on 2019-11-29 02:24:59
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showPropiedad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de0736b0bf031_34361446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d2f44b5b24fc7099cfcf49c32075d34d49d6676' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showPropiedad.tpl',
      1 => 1574990698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/displayComent.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de0736b0bf031_34361446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <ul class="list-group">
        <div class="cajaProp">
            <h4 class="subtitulo"><?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->ciudad;?>
</h4>
            <li class="list-group-item">Dirección: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->direccion;?>
</li>
            <li class="list-group-item">Tipo: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->tipo;?>
</li>
            <li class="list-group-item">Estado: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->estado;?>
</li>
            <?php if (($_smarty_tpl->tpl_vars['imgs']->value != null)) {?>
                <?php if (($_smarty_tpl->tpl_vars['user']->value['USER_TYPE'])) {?>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['cant_im']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['cant_im']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <li class="list-group-item">Link de Imagen: <?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->tpl_vars['i']->value]->ruta;?>
</li>
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
/elim/<?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">Eliminar</a>
                    <?php }
}
?>
                <?php } else { ?>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['cant_im']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['cant_im']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                            <?php if ($_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->tpl_vars['i']->value]->id_propiedad_fk == $_smarty_tpl->tpl_vars['propiedad']->value->id) {?>
                                <img class="card-img-top" src="../<?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->tpl_vars['i']->value]->ruta;?>
">
                            <?php }?>
                        <?php }
}
?> 
                <?php }?>
            <?php }?>
        </div>
    </ul>
    

<?php if (($_smarty_tpl->tpl_vars['user']->value['USER_TYPE'])) {?>

    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Agregar imagen</span>
    </nav>

    <form class="p-4" action="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
/addimage" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Imagen</label>
            <input name="imago[]" type="file" class="form-control" id="exampleDropdownFormEmail2" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>


    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Modificar Propiedad</span>
    </nav>

    <form class="p-4" action="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
/update" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleDropdownFormEmail2">Dirección</label>
                <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="direc" >
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormEmail2">Tipo</label>
                <input name="type" type="text" class="form-control" id="exampleDropdownFormEmail2" >
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword2">Estado</label>
                <input name="state" type="text" class="form-control" id="exampleDropdownFormPassword2" >
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormEmail2">Imagen</label>
                <input name="image[]" type="file" class="form-control" id="exampleDropdownFormEmail2" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Modificar</button>
    </form> 
<?php }?>

        <input id="id_prop" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
>

    <?php $_smarty_tpl->_subTemplateRender("file:vue/displayComent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (($_smarty_tpl->tpl_vars['user']->value['USERNAME'] && $_smarty_tpl->tpl_vars['user']->value['USER_TYPE'] == 0)) {?>

    <h3 class="prom">Agregar comentario</h3>

    <form class="p-4" id="form-coments" action="addCom" method=POST>

        <label for="exampleDropdownFormEmail2">Puntuacion</label>
        <select class="form-group" id="puntuacion" name="puntuacion">
            <option value="1">1</option>            
            <option value="2">2</option>            
            <option value="3">3</option>            
            <option value="4">4</option>            
            <option value="5">5</option>            
        </select>


        <label for="exampleDropdownFormEmail2">Comentario</label>
        <textarea class="form-group" id="comentario" onfocus="clearContent(this)" name="comentario" placeholder="Ingrese su comentario" rows="5"></textarea>
         
        <button type="submit" class="btn btn-primary">Comentar</button>

    </form>

<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value['USER_TYPE']) {?>
        <input id="admin" type="hidden" value=true>
    <?php }?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/coments.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
