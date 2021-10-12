<?php

class ProductModel{
      //genero un atributo de la clase
    private $db;
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', ''); 
        
    }

    function getProducts(){
        $sentencia = $this->db->prepare("select * from producto");
        $sentencia->execute();
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    
    }
    // !!!!IMPORTANTE
    // las instrucciones de insert to delete from y update las q yo hice son diferente porque lo hice con mi base de dato, que creo la hicimos diferente

    // function insertAmigurumi($id_producto, $precio, $color, $tamaño, $fk_id_categoria) {
    //     $sentencia = $this->db->prepare("INSERT INTO `id_producto`(id_producto, precio, color, tamaño, fk_id_categoria) VALUES(?, ?, ?, ?, ?)");
    //     $sentencia->execute(array($id_producto, $precio, $color, $tamaño, $id_ctegoria));
    
    // }

    // esto lo saque de db.php
    function insertProduct($precio, $color, $tamanio, $fk_id_estilo) {
        $db = connectToDb();
        $sentencia = $db->prepare("INSERT INTO producto(precio, color, tamanio, fk_id_estilo) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($precio, $color, $tamanio, $fk_id_estilo));
    
    }

    // function deleteAmigurumi($id){
    //     $sentencia = $this->db->prepare("DELETE FROM amigurumi id_producto=?");
    //     // DELETE FROM `id_producto` WHERE 0
    //     $sentencia->execute(array($id));
    // }
    function deleteProductFromDb ($id) {
        $db = connectToDb();
        $sentencia = $db->prepare("DELETE FROM producto WHERE id_producto=?");
        $sentencia->execute(array($id));
    }
    
    function updateAmigurumiFromDB($id){
        $sentencia = $this->db->prepare("UPDATE  `id_producto` SET `id_produto`='[value-1]',`Color`='[value-2]',`Precio`='[value-3]',`Tamaño`='[value-4]',`fk_id_categoria`='[value-5]' WHERE 1");
        $sentencia->execute(array($id));
    }
    // cambiar de amigurumi a product

}