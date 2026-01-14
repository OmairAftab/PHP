<?php


// A constructor allows you to initialize an object's properties upon creation of the object.
// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
//mean u dont have to call the set_name or set_anyproperty function as we can initialze 

class Car{
    public $model;
    public $color;

    function __construct($model,$color){
        $this->model=$model;
        $this->color=$color;
    }

    function get_model(){
        return $this->model;
    }

    function get_color(){
        return $this->color;
    }


    //ANYTHING INSIDE __destruct function will run autimatically  at end of script(when program is finished)
    function __destruct(){
        echo "Destructor of class";
    }
}


$ferrari=new Car(2000,"Red");

echo "The model is ". $ferrari->get_model(). "<br/>";
echo "The color is " .$ferrari->get_color(). "<br/>";
echo "<br/>";



//ab jo  destructor main hoga wo run hojaega q k sb run o gya



// if we have 2 or more  classes and objects made for each class then Destructors run in reverse order of object creation
class A {
    function __destruct() {
        echo "Destructor of A<br/>";
    }
}

class B {
    function __destruct() {
        echo "Destructor of B<br/>";
    }
}

$a = new A();
$b = new B();

echo "Script end<br/>";
?>