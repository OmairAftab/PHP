<?php

// A callback function is a function that is passed as an argument into another function.
// A callback function can be:
// A named function - pass the function name as a string
// An anonymous function - define a function inline, and pass it as an argument









// Any existing function can be used as a callback function. To use a named function as a callback function, pass a string containing the name of the function as the argument of another function:
function square($n){
    return $n*$n;
}
$numbers=[1,2,3,4,5];
print_r(array_map("square",$numbers));
echo "<br/>";




// An anonymous function is defined inline, and is most often used when a one-off function is needed.
$result=array_map(function($nn) {return $nn*$nn;} , $numbers);
print_r($result);

?>