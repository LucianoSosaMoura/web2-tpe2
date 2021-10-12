{include file='templates/header.tpl'}
<div>
 <h1> {$titulo} </h1>

   <ul>
      {foreach from=$producto item=$product}
         <li>Número de producto: {$product->id_producto} Precio: {$product->precio} Color: {$product->color} Tamaño: {$product->tamanio} Estilo: {$product->fk_id_estilo} <a href="deleteProduct/{$product->id_producto}">Borrar</a> </li>
      {/foreach}
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

{include file='templates/footer.tpl'}
            