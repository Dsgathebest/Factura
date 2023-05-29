<?php 
    class Employee {
        private $idEmployee;
        private $name;
        private $address;
        private $phoneNumber;
        private $email;
        private $typeEmployee;
        public function __constructor($idEmployee, $name, $address, $phoneNumber, $email, $typeEmployee){
            $this-> idEmployee = $idEmployee;
            $this-> name =$name;
            $this-> address = $address;
            $this-> phoneNumber = $phoneNumber;
            $this-> email = $email;
            $this-> typeEmployee = $typeEmployee;
        }
        

    }
?>