<?php

require_once "libs/smarty-3.1.39/libs/Smarty.class.php";


class ProductView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        
    }

    function showProducts($producto) {
                     
        
        // Instancio Smarty
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('titulo', "Listado de productos");

        $this->smarty->display('templates/listadoProductos.tpl');

    
    }


}