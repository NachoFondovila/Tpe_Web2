<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:22:55
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showPropiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb50af8a29b6_79027678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1244eb92300e960176a39df39bd6dbf5cbe0c8be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showPropiedades.tpl',
      1 => 1572556970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb50af8a29b6_79027678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Propiedades en <?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->ciudad;?>
</span>
</nav>

<div class="propiedades">
      <?php if ($_smarty_tpl->tpl_vars['propiedades']->value != null) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propiedades']->value, 'propiedad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['propiedad']->value) {
?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->imagen;?>
">
            <div class="card-body">
                <h5 class="card-title">En <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->estado;?>
</h5>
                                <?php if (($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
propiedad/<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
/eliminar">Eliminar</a>
                <?php }?>
                    <a class="btn btn-primary"href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
propiedad/<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
">Ver detalles</a>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <h3>Aún no hay propiedades disponibles en esta inmobiliaria</h3>
      <?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Agregar Propiedad</span>
    </nav>

    <form class="p-4" action="add/<?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->id;?>
" method="POST">
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
        <button type="submit" class="btn btn-primary">AGREGAR</button>
    </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
