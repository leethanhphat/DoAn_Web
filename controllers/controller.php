<?php
require_once("models/model.php");
class Controller{ 
    public $model;
    public function __construct()
    {
    $this->model = new Model();
    }
    public function invoke()
    {
        if(!isset($_GET["productid"])){
            $products = $this->model->getproductlist();
            include "views/productlist.php";
        }
        else
        {
            $product = $this->model->getProduct($_GET["productid"]); 
            include "views/viewproduct.php";
        }
    }
}
?>