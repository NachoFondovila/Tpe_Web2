<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:10:30
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb4dc6f01625_03089319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cad70d5cca577173f85fc83b93121eb8191fa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\login.tpl',
      1 => 1572554056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb4dc6f01625_03089319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Registración</span>
</nav>

<form class="p-4" action="addUser" method="POST">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Nombre</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="username" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ingrese email</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="email" placeholder="email@example.com">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Contraseña</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ciudad</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="ciudad" placeholder="Ciudad">
    </div>
    <button type="submit" class="btn btn-primary">Registrarme</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
