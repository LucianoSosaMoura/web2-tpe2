 <h1> {$titulo} </h1>
    {foreach from=$producto item=$product }
    <ul>
       <li> Número de producto:{$product->id_producto} Precio: {$product->precio} Color: {$product->color} Tamaño: {$product->tamanio} Estilo: {$product->fk_id_estilo}<a href="deleteProduct/'.$product->id_producto.'">Borrar</a> </li>
    <ul>
   
    {/foreach}
    

    
            