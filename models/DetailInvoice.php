<?php 
    class DetailInvoice{
        private $idDetailInvoice;
        private $idInvoice;
        private $idProduct;
        private $amount;
        private $price;
        public function __construct($idDetailInvoice, $idInvoice, $idProduct, $amount, $price){
            $this->idDetailInvoice = $idDetailInvoice;
            $this->idInvoice = $idInvoice;
            $this->idProduct = $idProduct;
            $this->amount = $amount;
            $this->price = $price;            
        }
        
        public function getIdDetailInvoice(){
            return $this->idDetailInvoice;
        }
        public function setIdDetailInvoice($idDetailInvoice){
            $this->idDetailInvoice = $idDetailInvoice;
        }

        public function getIdInvoice(){
            return $this->idInvoice;
        }
        public function setIdInvoice($idInvoice){
            $this->idInvoice = $idInvoice;
        }

        public function getIdProduct(){
            return $this->idProduct;
        }
        public function setIdProduct($idProduct){
            $this->idProduct = $idProduct;
        }

        public function getAmount(){
            return $this->amount;
        }
        public function setAmount($amount){
            $this->amount = $amount;
        }

        public function getPrice(){
            return $this->price;
        }
        public function setPrice($price){
            $this->price = $price;
        }
    }

?>