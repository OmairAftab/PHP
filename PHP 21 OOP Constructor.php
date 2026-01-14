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
}


$ferrari=new Car(2000,"Red");

echo "The model is ". $ferrari->get_model(). "<br/>";
echo "The color is " .$ferrari->get_color(). "<br/>";

?>