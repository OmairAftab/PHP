<?php

function printIterable(iterable $myIterable){
    foreach($myIterable as $item){
        echo $item;
        echo "<br/>";
    }
}

$arr=["a","b","c"];
printIterable($arr);

?>