<?php
/* Smarty version 3.1.33, created on 2019-10-30 01:54:48
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\adminInmobiliaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8df58ccd6e0_81284021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210948155ef258b9abd43fadc8dcab954c9b70a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\adminInmobiliaria.tpl',
      1 => 1572396077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db8df58ccd6e0_81284021 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addInm" method="POST">

    <h4>Agregar Inmobiliaria</h4>
        
    <div class=" row"> 
        <label>Ciudad</label>
        <input name="ciudad" type="text">
    </div>
    <div class=" row"> 
        <label>Encargado</label>
        <input name="encargado" type="text">
    </div>
    <div class=" row"> 
        <label>Dirección</label>
        <input name="direc" type="text">
    </div>
    <div class=" row"> 
        <label>Imagen</label>
        <input name="image" type="file">
    </div>
    <button type="submit"> AGREGAR </button>

    <form action="updateInmo/:<?php echo $_smarty_tpl->tpl_vars['Inmobiliaria']->value->id;?>
" method="POST">

        <h4>Modificar Inmobiliaria</h4>
        
        <div class=" row"> 
            <label>Ciudad</label>
            <input name="city" type="text">
        </div>

        <div class=" row"> 
            <label>Direccion</label>
            <input name="direc" type="text">
        </div>

        <div class=" row"> 
            <label>Encargado</label>
            <input name="encargado" type="text">
        </div>
        <div class=" row"> 
            <label>Imagen</label>
            <input name="image" type="text">
        </div>
        
        <button type="submit"> Modificar </button>

    </form>

</form><?php }
}
