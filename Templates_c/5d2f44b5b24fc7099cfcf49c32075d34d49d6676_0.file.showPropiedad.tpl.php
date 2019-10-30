<?php
/* Smarty version 3.1.33, created on 2019-10-30 03:44:24
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\Templates\showPropiedad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8f9089eb5f9_73181146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d2f44b5b24fc7099cfcf49c32075d34d49d6676' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\Templates\\showPropiedad.tpl',
      1 => 1572403391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db8f9089eb5f9_73181146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
    <li> Direccion: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->direccion;?>
</li>

    <li> Tipo: <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->tipo;?>
</li>
    
    <li> Estado <?php echo $_smarty_tpl->tpl_vars['propiedad']->value->estado;?>
</li>

</ul>


    <form action="update" method="GET">

        <h4>Modificar propiedad</h4>
        
        <div class=" row"> 
            <label>direccion</label>
            <input name="direc" type="text">
        </div>
        <div class=" row"> 
            <label>tipo</label>
            <input name="type" type="text">
        </div>
        <div class=" row"> 
            <label>Estado</label>
            <input name="state" type="text">
        </div>
        <div class=" row"> 
            <label>Imagen</label>
            <input name="image" type="text">
        </div>
        
        <button type="submit"> Modificar </button>

    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
