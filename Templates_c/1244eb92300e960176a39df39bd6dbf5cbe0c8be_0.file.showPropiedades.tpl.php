<?php
/* Smarty version 3.1.33, created on 2019-10-18 21:52:27
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showPropiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daa17fb50e1b0_14972089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1244eb92300e960176a39df39bd6dbf5cbe0c8be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showPropiedades.tpl',
      1 => 1571428317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5daa17fb50e1b0_14972089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propiedades']->value, 'propiedad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['propiedad']->value) {
?>
                <li> Direccion: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->direccion;?>
</li>
        <li> Tipo: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->tipo;?>
</li>
        <li> Estado <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->estado;?>
</li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
propiedades/eliminar/<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
">eliminar</a>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<form action="add/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
        
        <div class=" row"> 
            <label>direccion</label>
            <input name="direc" type="text">
        </div>
        <div class=" row"> 
            <label>tipo</label>
            <input name="type" type="text">
        </div>
        <div class=" row"> 
            <label>Estado</label>
            <input name="estate" type="text">
        </div>
        <div class=" row"> 
            <label>Imagen</label>
            <input name="image" type="file">
        </div>
        
        <button type="submit"> AGREGAR propiedad </button>

    </form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
