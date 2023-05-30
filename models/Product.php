<?php 
    class Product{
        private $idProduct;
        private $name;
        private $price;
        private $quantity;
        public function __construct($idProduct, $name, $price, $quantity){
            $this->idProduct = $idProduct;
            $this->name = $name;
            $this->price =$price;
            $this->quantity = $quantity;
        }
        
    }

?>