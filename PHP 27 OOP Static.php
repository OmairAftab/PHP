<?php


//PHP - STATIC METHODS

// Static methods can be called directly - without creating an instance of the class first.
// Static methods are declared with the static keyword:


// To access a static method use the class name, double colon (::), and the method name:
// Syntax
// ClassName::staticMethod();


class Greeting{

static function hlo(){
    echo "HELLO <br/>";
}
}

Greeting::hlo();






// A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):

class Goodbye{

    static function bye(){
        echo "Allah Hafiz g <br/>";
    }

    function __construct(){
        self::bye();
    }
}


$obj=new Goodbye(); //jb hum object bnae ge to constructor khud hee call ho jae ga 









//PHP - STATIC PROPERTIES

// Static properties can be called directly - without creating an instance of a class.

// Static properties are declared with the static keyword:

// To access a static property use the class name, double colon (::), and the property name:

// Syntax
// ClassName::$staticProp;




class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;

echo "<br/>";







// A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):

class pi2 {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi2();
echo $pi->staticValue();

?>