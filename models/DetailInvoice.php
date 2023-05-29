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
    }

?>