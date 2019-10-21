<?php
/* Smarty version 3.1.33, created on 2019-10-21 02:13:39
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dacf8335914f6_51804324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7257f69f4edd17d298ce31ec0e39a07157d2eb9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\login.tpl',
      1 => 1571616764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dacf8335914f6_51804324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Registracion</h3>
    <form action="verify">
        <input type="username" placeholder="Ingrese su nombre">
        <input type="email" placeholder="Ingrese su email">
        <input type="password" placeholder="Ingrese su contraseña">
        <button type="submit">Registrarme</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
