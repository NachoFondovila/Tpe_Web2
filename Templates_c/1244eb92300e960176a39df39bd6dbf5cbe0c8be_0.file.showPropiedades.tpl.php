<?php
/* Smarty version 3.1.33, created on 2019-11-28 22:30:38
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showPropiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de03c7e06b4d2_29252749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1244eb92300e960176a39df39bd6dbf5cbe0c8be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showPropiedades.tpl',
      1 => 1574976636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de03c7e06b4d2_29252749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Propiedades en <?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->ciudad;?>
</span>
</nav>

<div class="propiedades">
    <?php if ($_smarty_tpl->tpl_vars['propiedades']->value != null) {?>
        <div class="card" style="width: 30rem;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propiedades']->value, 'propiedad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['propiedad']->value) {
?>
                <div class="cajaProp">
                    <?php if ((isset($_smarty_tpl->tpl_vars['imgs']->value))) {?>
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
                    <div class="card-body">
                        <h5 class="card-title">En <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->estado;?>
</h5>
                        <?php if (($_smarty_tpl->tpl_vars['user']->value['USER_TYPE'])) {?>
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
        </div>
    <?php } else { ?>
        <h3>Aún no hay propiedades disponibles en esta inmobiliaria</h3>
    <?php }?>
</div>

<?php if (($_smarty_tpl->tpl_vars['user']->value['USER_TYPE'])) {?>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Agregar Propiedad</span>
    </nav>

    <form class="p-4" action="add/<?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->id;?>
" method="POST" enctype="multipart/form-data">
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
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
