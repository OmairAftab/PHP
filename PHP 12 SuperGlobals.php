<?php

// The $GLOBALS superglobal is an array that contains references to all global variables of the script.

$x=99;

function myfuncion(){
    echo $GLOBALS['x'];
    echo "<br/>";
}
myfuncion();



$y=1;
function addthem(){
    $z=$GLOBALS['x']+$GLOBALS['y'];
    echo $z;
    echo "<br/>";
}
addthem();

print_r($GLOBALS);




//print all info about server
echo "<pre>";
print_r($_SERVER);
echo "<pre>";

echo $_SERVER['HTTP_HOST'];






//$_REQUEST get and post dono type k data ko show krata a but $_POST only post type k data ko show krata a

?>