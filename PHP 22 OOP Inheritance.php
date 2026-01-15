<?php

// Inheritance in OOP = When a class derives from another class.

// The child class will inherit all the public  properties and methods from the parent class. In addition, it can have its own properties and methods.

// An inherited class is defined by using the extends keyword.


class Fruit{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    public function announce1(){
        echo "I am a fruit <br/>";
    }


    protected function announce2(){
        echo "I am a fruit <br/>";
    }


    //this is private function the child class will not be able to acces it
    private function pr(){
        echo "I am private function <br/>";
    }

}

class Mango extends Fruit{
    function fr(){
        echo "I am instance of Fruit class <br/>";
        $this->announce2();   //  protected func from parent is allowed inside the child class
    }
}

$mngo=new Mango("Mango","Yellow");
$mngo->announce1();
$mngo->fr();

echo "<br/>";
//YE dono error den ge as  they are protecteed and private methods in parrent class
// $mngo->announce2();
// $mngo->pr();








// PHP - Overriding Inherited Methods
// Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

//e.g we will override construct and intro in this case:

class Car{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    function intro(){
        echo "Name : " . $this->name . "   Color:" . $this->color . "<br/>";
    }
}

class Mehran extends Car{
    public $model;

    function __construct($name,$color,$model){
        $this->name=$name;
        $this->color=$color;
        $this->model=$model;
    }

    function intro(){
        echo "Name : " . $this->name . "<br/>  Color:" . $this->color . "<br/>  Model : ".$this->model . "<br/>";
    }
}


$gaddi=new Mehran("Mehrangaddi","White","900");
$gaddi->intro();









// The final keyword in PHP is used to stop inheritance or overriding.
// 1️⃣ final Class
// Meaning

// ❌ No other class can extend it

// Example
// final class Fruit {
//     public function announce() {
//         echo "I am a fruit";
//     }
// }

// // ❌ ERROR
// class Mango extends Fruit {
// }



// 2️⃣ final Method
// Meaning

// 👉 Child class cannot override this method

// Example
// class Fruit {
//     final public function taste() {
//         echo "Sweet";
//     }
// }

// class Mango extends Fruit {
//     // ❌ ERROR
//     public function taste() {
//         echo "Very Sweet";
//     }
// }




?>