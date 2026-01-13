<?php

function output(){
    echo "Non premetralized function";
      echo "<br/>";
}

output();


function sum($a,$b)  {
    echo $a+$b;
    echo "<br/>";
}

sum(6,8);

function info($name,$age){
    echo "Your name is $name and you are $age years old <br/>";
}
info("omair",20);

function returnfunction() {
    return "Omair Aftab";
}

echo "my name is " . returnfunction();
echo "<br/>";











//Function with default parameter
//RULE: DEFAULT PARAMETER MUST BE AT END .. ANY PARAMETER BEFORE LAST PARAMETER CAN NOT BE GIVE DEFAULT VALUE
function defaultvaluefunction ($name,$lastname="Ali"){
    //This means agar user ne lastname ki value nhi di to default usko ali rkh do
    echo "My name is $name $lastname";
    echo "<br/>";
}
defaultvaluefunction("Mohammad");
defaultvaluefunction("Omair","Aftab");










//NESTED FUNCTIONS : These are present inside another function

function test()  {
    echo "I am in test function <br/>";

    function insidetest() {
        echo "I am inside test <br/>";
    }
}
//WE CAN ONLY CALL PARENT FUNCTION
//WE CANT USE NESTED FUNCTION UNTIL PARENT FUNCTION IS CALLED
test();
insidetest();














// VARIABLE FUNCTION
function varfunc(){
    echo "Varfunc function called <br/>";
}
$varfunc="varfunc";
$varfunc();






function sumnumbers(...$x){
    $sum=0;
    $len=count($x);

    for($i=0;$i<$len;$i++){
        $sum+=$x[$i];
    }

    echo("The sum of numbers is : $sum");
}

sumnumbers(1,1,8,10,80);

?>