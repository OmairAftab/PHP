<?php

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// when a child class is inherited from an abstract class, we have the following rules:

// The child class method must be defined with the same name and it redeclares the parent abstract method
// The child class method must be defined with the same or a less restricted access modifier
// The number of required arguments must be the same. However, the child class may have optional arguments in addition




abstract class Car{
    public $name;

    function __construct($name){
        $this->name=$name;
    }

    abstract public function intro() : string;  //ABSTRACT FUNCTION
}

class Mehran extends Car{
    public function intro() : string{
        return "Mehran gaddi road utte kaddi";
    }
}


$gadi=new Mehran("MEHRAN");
echo $gadi->intro();

?>