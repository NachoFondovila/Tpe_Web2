<?php
/* Smarty version 3.1.33, created on 2019-10-30 03:38:52
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showInmobiliaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8f7bc913cd4_81129651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4246fbc2cd7ccbaa002969efbe8be71d5bc40871' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showInmobiliaria.tpl',
      1 => 1572401697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:verifyUser.tpl' => 1,
    'file:adminInmobiliaria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db8f7bc913cd4_81129651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Inmobiliarias</h1>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inmobiliarias']->value, 'inmobiliaria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inmobiliaria']->value) {
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
propiedades/<?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->id;?>
"><li><?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->ciudad;?>
</li></a>
        <?php if (($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
inmobiliaria/eliminar/<?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->id;?>
/">Eliminar</a>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>



<?php if (!($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:verifyUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminInmobiliaria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
