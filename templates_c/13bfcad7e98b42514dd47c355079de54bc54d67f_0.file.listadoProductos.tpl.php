<?php
/* Smarty version 3.1.39, created on 2021-10-12 17:19:04
  from 'C:\xampp\htdocs\web2\TPE\templates\listadoProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165a768759035_92261529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13bfcad7e98b42514dd47c355079de54bc54d67f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\listadoProductos.tpl',
      1 => 1634051941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165a768759035_92261529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
 <h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>

   <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
         <li>Número de producto: <?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
 Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
 Color: <?php echo $_smarty_tpl->tpl_vars['product']->value->color;?>
 Tamaño: <?php echo $_smarty_tpl->tpl_vars['product']->value->tamanio;?>
 Estilo: <?php echo $_smarty_tpl->tpl_vars['product']->value->fk_id_estilo;?>
 <a href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">Borrar</a> </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <ul>
</div>

<h2> Producto nuevo </h2>

   <form action="createProduct" method="post">
                  <label>Precio: </label>
                  <input type="number" name="precio" id="precio">
                  <label>Color: </label>
                  <input type="color" name="color" id="color">
                  <label>Tamaño: </label>
                  <select name="tamaño" value="tamaño"> 
                  <option value="pequeño">pequeño</option>
                  <option value="mediano">mediano</option>
                  <option value="grande">grande</option>
                  </select>
                  <label>Estilo</label>
                  <select name="fk_id_estilo" value="Estilo"> 
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  </select>
                  <input type="submit" value="Guardar">
               </form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }
}
