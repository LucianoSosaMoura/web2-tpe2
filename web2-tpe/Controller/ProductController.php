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
// El route llama al controller
    function showHome() {

        $this->authHelper->checkLoggedIn();
        $products = $this->model->getProducts();
        $this->view->showProducts($products);    
    }
    function createAmigurumi($id){
        $this->authHelper->checkLoggedIn();
        $this->model->insertAmigurumi();
        $this->view->showHomeLocation();

        // if(isseet($_POST['color'], $_POST['tamaño'], $_POST['precio']))
        
    }
    function deleteAmigurumi($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteAmigurumiFromDB($id);
        $this->view->showHomeLocation();
    }

    function updateAmigurumi($id){
        $this->authHelper->checkLoggedIn();
        $this->model->updateAmigurumiFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewAmigurumi($id){
        $this->authHelper->checkLoggedIn();
        $amigurumi = $this->model->getAmigurumi($id);
        $this->view->showAmigurumi($amigurumi);
    }
}