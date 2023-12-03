<?php
require_once("product.php"); 
require_once("db_module");

class Model{
public function getproductlist(){
$link = null;
taoKetNoi ($link);
$result = chayTruyVanTraVeDL($link, "select * from products");
$data = array();
while($rows = mysqli_fetch_assoc($result)){
$product = new Product(
$rows["productID"],
$rows["productName"],
$rows["categoryID"], 
$rows["price"],
$rows["stockQuantity"],
$rows["image"]);

array_push($data, $product);
}
giaiPhongBoNho ($link, $result);
return $data;
}
public function getproduct($productID){
    $allproducts = $this->getproductlist();
    foreach($allproducts as $product) 
        if($product->getproductID()===$productID)
            return $product;
    return null;
}
}
?>