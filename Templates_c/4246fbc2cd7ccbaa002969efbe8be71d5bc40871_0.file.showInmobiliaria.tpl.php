<?php
/* Smarty version 3.1.33, created on 2019-10-21 22:46:17
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showInmobiliaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae19195392e2_85511698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4246fbc2cd7ccbaa002969efbe8be71d5bc40871' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showInmobiliaria.tpl',
      1 => 1571690722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:verifyUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dae19195392e2_85511698 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if (!$_smarty_tpl->tpl_vars['iniciado']->value) {
$_smarty_tpl->_subTemplateRender("file:verifyUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
