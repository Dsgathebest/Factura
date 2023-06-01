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
        public function getIdEmployee(){
            return $this->idEmployee;
        }
        public function setIdEmployee($idEmployee){
            $this->idEmployee = $idEmployee;
        }

        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }

        public function getAddress(){
            return $this->address;
        }
        public function setAddress($address){
            $this->address = $address;
        }

        public function getPhoneNumber(){
            return $this->phoneNumber; 
        }
        public function setPhoneNumber($phoneNumber){
            $this->phoneNumber = $phoneNumber;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getTypeEmployee(){
            return $this->typeEmployee;
        }
        public function setTypeEmployee($typeEmployee){
            $this->typeEmployee = $typeEmployee;
        }     

    }
?>