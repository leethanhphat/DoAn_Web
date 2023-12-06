<?php
require_once("models\model.php");
    $model = new Model();
    $products = $model->getproductlist();
    include ('views\home\list_item.php');
?>