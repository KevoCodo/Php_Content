<?php
    //Object Oriented Property
    class Person{
        private $name;
        private $email;
        private  static $ageLimit = 40;

        //Run construct - runs when object is created
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            //Use __CLASS__ in the place of actual text
            echo __CLASS__.' <b>created:</b> <br>';
        }

        /*public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }*/

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }
        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }
    #Static props and methods
    //echo Person::$ageLimit;
    echo Person::getAgeLimit();

    //$person1 = new Person('John Doe', 'jdoe@gmail.com');

    //$person1->name = 'John Doe';

    //echo $person1->name;

    //$person1 = new Person;

    //$person1->setName('John Doe');

    //echo $person1->getName().$person1->getEmail();

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->name = $name;
            $this->email = $email;
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created.<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }
    }

    //$customer1 = new Customer('John Doe', 'jdoe@gmail.com', 300);

    //decho $customer1->getBalance();


