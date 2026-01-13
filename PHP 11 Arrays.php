<?php

$cars=array("bmw","lambo","civic");
var_dump($cars);     echo "<br/>";


echo $cars[0];
    echo "<br/>";

$cars[1]="alto";
    echo "<br/>";


foreach($cars as $c){
    echo $c;
    echo "<br/>";
}



$gaari = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $gaari["model"];

$gaari["year"]=2000;
echo "<br/>";

echo $gaari["year"];
echo "<br/>";


//instead of creating arrays with array() creating it with : square brackets []

$brands=["hp","dell","thinkpad"];
echo $brands[0];
echo "<br/>";





// EXECUTE ANY FUNCTION PRESENT IN ARRAY
function printkro(){
    echo "hehe <br/>";
}

$listt=["o",111,"printkro"];

$listt[2]();






$fruits=array ("guava","banana","mango");
$fruits[]="orange"; //Add one more array item to the $fruits array:

foreach($fruits as $fr){
    echo "$fr <br/>";
}


$gddi = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $gddi["model"];

?>