<?php
/* Smarty version 3.1.33, created on 2019-10-07 22:00:57
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showInmobiliaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9b99796cfbf2_92045936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4246fbc2cd7ccbaa002969efbe8be71d5bc40871' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showInmobiliaria.tpl',
      1 => 1570474411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d9b99796cfbf2_92045936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
