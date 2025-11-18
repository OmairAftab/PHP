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


function returnfunction() {
    return "Omair Aftab";
}

echo "<h1 style:'color:blue'>my name is ".returnfunction()." .<h1/>";












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

?>