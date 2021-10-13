<?php

require_once "Model/ProductModel.php";
require_once "View/ProductView.php";
require_once "./AuthHelper.php";

class ProductController {

    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->AuthHelper = new AuthHelper();
        
    }
    function showHome() {
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
         $home = $this->model->showHome();
    }
    
    function showProducts() { //antigua showhome
        $this->authHelper->checkLoggedIn();
        $products = $this->model->getProducts();
        $this->view->showProducts($products);    
    }
    function createProduct($id){
        $this->authHelper->checkLoggedIn();
        $this->model->insertProduct($precio, $color, $tamanio, $fk_id_estilo);
        $this->view->showHomeLocation();
    }
    function deleteProduct($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteProductFromDB($id);
        $this->view->showHomeLocation();
    }
    // function updateProduct($id){
    //     $this->authHelper->checkLoggedIn();
    //     $this->model->updateProductFromDB($id);
    //     $this->view->showHomeLocation();
    // }
     function viewProduct($id){
        $this->authHelper->checkLoggedIn();
        $product = $this->model->getProducts();
        $this->view->showProduct($product);
    }

    
    
}
