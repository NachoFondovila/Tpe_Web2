<?php
/* Smarty version 3.1.33, created on 2019-10-30 01:31:40
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showPropiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8d9ecef7678_97449088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1244eb92300e960176a39df39bd6dbf5cbe0c8be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showPropiedades.tpl',
      1 => 1572318560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db8d9ecef7678_97449088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>propiedades en <?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->ciudad;?>
</h1>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propiedades']->value, 'propiedad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['propiedad']->value) {
?>

        <img src="img/casabalcarce4.jpg">
        <li>
            <p>   direccion: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->direccion;?>
 </p>
            
            <?php if (($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
propiedades/eliminar/<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->id;?>
/">Eliminar</a>
            -_-
            <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
propiedad/<?php echo $_smarty_tpl->tpl_vars['propiedad']->value->id;?>
/">Ver detalles</a>
        </li>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['iniciado']->value)) {?>

<form action="add/:<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
        <h4>Agregar propiedad</h4>
        
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
        
        <button type="submit"> AGREGAR </button>

    </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
