<?php

class User {
    public $name;

    public $lastname;

    public $products = [];
    
    public function __construct($_name, $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }    

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }
}
?>

