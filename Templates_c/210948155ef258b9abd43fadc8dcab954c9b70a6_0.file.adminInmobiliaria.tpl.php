<?php
/* Smarty version 3.1.33, created on 2019-11-11 21:29:38
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\adminInmobiliaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc9c4b21daea1_80552911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210948155ef258b9abd43fadc8dcab954c9b70a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\adminInmobiliaria.tpl',
      1 => 1572555528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc9c4b21daea1_80552911 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Agregar Inmobiliaria</span>
</nav>

<form class="p-4" action="addInm" method="POST">
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ciudad</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="ciudad" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Encargado</label>
        <input name="encargado" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Dirección</label>
        <input name="direc" type="text" class="form-control" id="exampleDropdownFormPassword2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Contacto</label>
        <input name="contact" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <button type="submit" class="btn btn-primary">AGREGAR</button>
</form>

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Modificar Inmobiliaria</span>
</nav>

<form class="p-4" action="updateInmo" method="POST">
        <label>Inmobiliaria a Modificar</label>
            <select name="IDI">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inmobiliarias']->value, 'inmobiliaria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inmobiliaria']->value) {
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->ciudad;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Ciudad</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="city" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Encargado</label>
        <input name="encargado" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormPassword2">Dirección</label>
        <input name="direc" type="text" class="form-control" id="exampleDropdownFormPassword2" >
    </div>
    <div class="form-group">
        <label for="exampleDropdownFormEmail2">Contacto</label>
        <input name="contact" type="text" class="form-control" id="exampleDropdownFormEmail2" >
    </div>
    <button type="submit" class="btn btn-primary">Modificar</button>
</form><?php }
}
