<?php 
class Invoice{
    private $numberInvoice;
    private $dateInvoice;
    private $idCustomer;
    private $subtotalInvoice;
    private $taxes;
    private $total;
    private $warrantly;
    public function __construct($numberInvoice,$dateInvoice,$idCustomer,$subtotalInvoice,$taxes,$total,$warrantly){
        $this->numberInvoice = $numberInvoice;
        $this->dateInvoice = $dateInvoice;
        $this->idCustomer = $idCustomer;
        $this->subtotalInvoice = $subtotalInvoice;
        $this->taxes = $taxes;
        $this->total =$total;
        $this->warrantly = $warrantly;
    }
    public function getnumberInvoice (){
        return $this -> numberInvoice;
    }
    public function setnumberInvoice($numberInvoice){
        $this->numberInvoice = $numberInvoice;
    }

    public function getdateInvoice(){
        return $this -> dateInvoice;
    }
    public function setdateInvoice($dateInvoice){
        $this->dateInvoice = $dateInvoice;
    }

    public function idCustomer(){
        return $this -> idCustomer;
    }
    public function setidCustomer($idCustomer){
        $this->idCustomer = $idCustomer;
    }

    public function getsubtotalInvoice(){
        return $this -> subtotalInvoice;
    }
    public function setsubtotalInvoice($subtotalInvoice){
        $this->subtotalInvoice =$subtotalInvoice;
    }

    public function gettaxes(){
        return $this -> taxes;
    }
    public function settaxes($taxes){
        $this->taxes = $taxes;
    }

    public function gettotal(){
        return $this-> total;
    }
    public function settotal($total){
        $this->total = $total;
    }

    public function getwarrently(){
        return $this->warrantly;
    }
    public function settwarrently($warrantly){
        $this->warrantly = $warrantly;
    }

    
}

?>