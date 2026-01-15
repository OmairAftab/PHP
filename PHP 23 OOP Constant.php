<?php

// Class constants can be useful if you need to define some constant data within a class.

// A constant is declared inside a class with the const keyword.

// A constant cannot be changed once it is declared.

// We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:

class bye{

    const msg="GOODBYE";
}

echo bye::msg;

echo "<br/>";




// Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:
class hello{
    const hlo="HEMLO G";

    function introduce(){
        echo self::hlo;
    }
}

$hi=new hello();
$hi->introduce();
?>