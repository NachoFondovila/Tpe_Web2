<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:23:39
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showPropiedad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb50dbc81402_83435781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d2f44b5b24fc7099cfcf49c32075d34d49d6676' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showPropiedad.tpl',
      1 => 1572556897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb50dbc81402_83435781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <ul class="list-group">
        <li class="list-group-item">Dirección: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->direccion;?>
</li>
        <li class="list-group-item">Tipo: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->tipo;?>
</li>
        <li class="list-group-item">Estado: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->estado;?>
</li>
        <?php if (isset($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
            <li class="list-group-item">Link de Imagen: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->imagen;?>
</li>
        <?php }?>
    </ul>
    

<?php if (isset($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Modificar Propiedad</span>
</nav>

<form class="p-4" action="<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
/update" method="POST">
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
            <input name="image" type="text" class="form-control" id="exampleDropdownFormEmail2" >
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</form> 
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
