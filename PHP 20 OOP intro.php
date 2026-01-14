<?php

class Fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name=$name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color=$color;
    }

    function get_color(){
        return $this->color;
    }
}


$apple=new Fruit();
$apple->set_name("APPLE");
$apple->set_color("RED");

echo "Name : " . $apple->get_name() . "<br/>";
echo "Color : " . $apple->get_color() . "<br/>";



$mango=new Fruit();
$mango->set_name("MANGO");
$mango->set_color("YELLOW");

echo "Name: " .$mango->get_name() . "<br/>";
echo "Color :".$mango->get_color(). "<br/>";







// You can use the instanceof keyword to check if an object belongs to a specific class:

var_dump($apple instanceof Fruit);
var_dump($mango instanceof Fruit);



?>