<?php
/* Smarty version 3.1.33, created on 2019-10-21 03:27:56
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dad099c21d2f5_05139762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cad70d5cca577173f85fc83b93121eb8191fa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\login.tpl',
      1 => 1571621246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dad099c21d2f5_05139762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Registracion</h3>
    <form action="verify">
        <input type="username" placeholder="Ingrese su nombre">
        <input type="email" placeholder="Ingrese su email">
        <input type="password" placeholder="Ingrese su contraseña">
        <input type="text" placeholder="Ingrese su ciudad">
        <button type="submit">Registrarme</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
