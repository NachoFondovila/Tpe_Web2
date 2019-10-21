<?php
/* Smarty version 3.1.33, created on 2019-10-21 03:49:23
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\verifyUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dad0ea33506f6_67402059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '255e01b5322c80fb5b15eeb2f72d39100a14851f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\verifyUser.tpl',
      1 => 1571621631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad0ea33506f6_67402059 (Smarty_Internal_Template $_smarty_tpl) {
?>        <h3>LOGUEARSE</h3>
    <form action="login/verify" method="POST">

            <label>Usuario (email)</label>
            <input type="email" name="username" placeholder="Ingrese email">
        
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
         <?php }?>

        <button type="submit" >Ingresar</button>
    </form>

<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
login"><p>Logearse</p></a>
<?php }
}
