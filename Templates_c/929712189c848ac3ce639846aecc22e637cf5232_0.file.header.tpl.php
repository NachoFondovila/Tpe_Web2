<?php
/* Smarty version 3.1.33, created on 2019-10-29 02:52:01
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db79b41067a58_81580194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929712189c848ac3ce639846aecc22e637cf5232' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\header.tpl',
      1 => 1572313434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db79b41067a58_81580194 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <?php if (!($_smarty_tpl->tpl_vars['iniciado']->value)) {?>
            <h3>Visitante</h3>
            <?php } else { ?>
            <h3><?php echo $_smarty_tpl->tpl_vars['iniciado']->value;?>
</h3>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
logout"><button>Salir</button></a>
        <?php }?>
        <?php }
}
