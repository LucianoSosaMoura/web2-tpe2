<?php

class ProductModel{

    private $db;
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', ''); 
        
    }
    function showHome(){
    //a realizar aun    
    }
    
    function getProducts(){
        $sentencia = $this->db->prepare("select * from producto");
        $sentencia->execute();
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    
    }
    // esto lo saque de db.php
    function insertProduct($precio, $color, $tamanio, $fk_id_estilo) {
        $sentencia = $this->db->prepare("INSERT INTO producto(precio, color, tamanio, fk_id_estilo) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($precio, $color, $tamanio, $fk_id_estilo));
    
    }
    function deleteProductFromDb ($id) {
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");
        $sentencia->execute(array($id));
    }
    
    function updateProductFromDB($id){
        $sentencia = $this->db->prepare("UPDATE  `id_producto` SET `id_produto`='[value-1]',`Color`='[value-2]',`Precio`='[value-3]',`Tamaño`='[value-4]',`fk_id_categoria`='[value-5]' WHERE 1");
        $sentencia->execute(array($id));
    }

}
