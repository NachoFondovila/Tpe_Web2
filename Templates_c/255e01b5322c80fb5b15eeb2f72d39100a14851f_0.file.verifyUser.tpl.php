<?php
/* Smarty version 3.1.33, created on 2019-10-29 03:24:36
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\verifyUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7a2e40ce555_61029646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '255e01b5322c80fb5b15eeb2f72d39100a14851f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\verifyUser.tpl',
      1 => 1572314634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7a2e40ce555_61029646 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h3>LOGUEARSE</h3>
<form class="p-4" action="verify" method="POST">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ingrese email</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="username" placeholder="email@example.com">
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Contraseña</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> 
        <div role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
login"><p>Registrarse</p></a>

<?php }
}
