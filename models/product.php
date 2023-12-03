<?php
class Product{

    private $productID ;
    private $productName;
    private $categoryID ; 
    private $price;
    private $stockQuantity;
    private $image;
    public function getproductID(){return $this->productID;}
    public function getproductName(){return $this->productName;}
    public function getcategoryID(){return $this->categoryID;} 
    public function getprice(){return $this->price;}
    public function getstockQuantity(){return $this->stockQuantity;}
    public function getimage(){return $this->image;}

    public function __construct($productID, $productName, $categoryID, $price,$stockQuantity,$image)
    {
    $this->productID = $productID;
    $this->productName = $productName; 
    $this->categoryID = $categoryID;
    $this->price = $price;
    $this->stockQuantity = $stockQuantity;
    $this->image = $image;

    }
    public function __toString()
    {
    return "Product($this->productID, $this->productName, $this->categoryID, $this->price,$this->stockQuantity, $this->image)";
    }
}
?>