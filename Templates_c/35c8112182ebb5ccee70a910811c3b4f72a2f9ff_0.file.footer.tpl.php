<?php
/* Smarty version 3.1.33, created on 2019-11-11 21:29:36
  from 'C:\xampp\htdocs\GitHub\Tpe_Web2\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc9c4b07dbe21_38069295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35c8112182ebb5ccee70a910811c3b4f72a2f9ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Tpe_Web2\\templates\\footer.tpl',
      1 => 1573168193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc9c4b07dbe21_38069295 (Smarty_Internal_Template $_smarty_tpl) {
?>    <footer>
        <ul class="pie">
        <?php if (isset($_smarty_tpl->tpl_vars['inmobiliaria']->value)) {?>
            <li >Direccion: <?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->direccion;?>
</li>
            <li>Teléfono: Tel. <?php echo $_smarty_tpl->tpl_vars['inmobiliaria']->value->contacto;?>
</li>
        <?php }?>
            <li>E-mail: anabelaltuna@live.com</li>
            <li>Seguinos en:
            <a href="https://www.facebook.com/pg/Anabelaltunaestudioinmobiliario/posts/" target="_blank">
                facebook
            </a>
            </li>
        </ul>
    </footer>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/coments.js"><?php echo '</script'; ?>
>
    </body>
</html>    <?php }
}
