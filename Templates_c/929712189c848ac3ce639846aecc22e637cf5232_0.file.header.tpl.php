<?php
/* Smarty version 3.1.33, created on 2019-11-28 23:22:12
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de04894246761_30424260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929712189c848ac3ce639846aecc22e637cf5232' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\header.tpl',
      1 => 1574979509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de04894246761_30424260 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    
    <body>

    <input type="hidden" id="user_id" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
>
    <input type="hidden" id="user_name" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['USERNAME'];?>
>

        <div class="logo">
            <a href= "<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
ver"> <h2>Inicio</h2> </a>
            <?php echo $_smarty_tpl->tpl_vars['Logo']->value;?>

        </div>
            <ul class="nav nav-tabs">
                <?php if (($_smarty_tpl->tpl_vars['user']->value['USERNAME'] == '')) {?>
                    <li class="nav-item">
                        <a class="nav-link active">Visitante</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
login" class="nav-link">Registrarse</a>
                    </li>
                    <?php } else { ?>    
                    <li class="nav-item">
                        <a class="nav-link active"><?php echo $_smarty_tpl->tpl_vars['user']->value['USERNAME'];?>
</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
logout">Cerrar Sesión</a>
                    </li>
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['user']->value['USER_TYPE'])) {?>
                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
users" class="nav-link">Admininistrar Usuarios</a>
                    </li>
                <?php }?>
            </ul><?php }
}
