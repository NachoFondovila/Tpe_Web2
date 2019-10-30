<?php
/* Smarty version 3.1.33, created on 2019-10-29 02:54:36
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db79bdc1e8fc6_68723854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cad70d5cca577173f85fc83b93121eb8191fa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\login.tpl',
      1 => 1572314071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db79bdc1e8fc6_68723854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Registracion</h3>

    <form action="addUser" method="POST">

        <input type="username" name="username" placeholder="Ingrese su nombre">
        <input type="email"    name="email" placeholder="Ingrese su email">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="text"  name="ciudad" placeholder="Ingrese su ciudad">

        <button type="submit">Registrarme</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
