<?php

// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time


// To implement an interface, a class must use the implements keyword.

// A class that implements an interface must implement all of the interface's methods.


interface Animal{
    public function size();
    public function sound();
}

class Cat implements Animal{
    public function size(){
        echo "I am small <br/>";
    }

    public function sound(){
       echo "meow <br/>";
    }
}

class Dog implements Animal{
    public function size(){
        echo "I am medium <br/>";
    }

    public function sound(){
       echo "vou vou hurr hurr <br/>";
    }
}


$billi=new Cat();
$doggy=new dog();


$billi->size();
$billi->sound();

echo "<br/>";

$doggy->size();
$doggy->sound();


?>