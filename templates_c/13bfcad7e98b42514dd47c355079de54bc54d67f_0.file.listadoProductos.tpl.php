<?php
/* Smarty version 3.1.39, created on 2021-10-12 14:17:10
  from 'C:\xampp\htdocs\web2\TPE\templates\listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61657cc66090b2_07919375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13bfcad7e98b42514dd47c355079de54bc54d67f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\listadoProductos.tpl',
      1 => 1634041014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61657cc66090b2_07919375 (Smarty_Internal_Template $_smarty_tpl) {
?> <h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <ul>
         <li> Número de producto:<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
 Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
 Color: <?php echo $_smarty_tpl->tpl_vars['product']->value->color;?>
 Tamaño: <?php echo $_smarty_tpl->tpl_vars['product']->value->tamanio;?>
 Estilo: <?php echo $_smarty_tpl->tpl_vars['product']->value->fk_id_estilo;?>
<a href="deleteProduct/'.$product->id_producto.'">Borrar</a> </li>
      <ul>

   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    
            <?php }
}
