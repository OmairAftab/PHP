<?php


// PHP only supports single inheritance: a child class can inherit only from one single parent.
// So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

// Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

// Traits are declared with the trait keyword:

trait trait1{
    function hlo1(){
        echo "HELLO from trait1 <br/>";
    }

    function bye1(){
        echo "bye from trait1 <br/>";
    }
}


trait trait2{
    function hlo2(){
        echo "HELLO from trait 2 <br/>";
    }

    function bye2(){
        echo "bye from trait2 <br/>";
    }
}



class Welcome1{
    use trait1;
}

class Welcome2{
    use trait1,trait2;
}


$obj1=new Welcome1();
$obj1->hlo1();
$obj1->bye1();


$obj2=new Welcome2();
$obj2->hlo1();
$obj2->hlo2();
$obj2->bye1();
$obj2->bye2();

?>