<!-- <?php

$x=8;
$y=9;
echo $x+$y;
echo "<br/>";

$y=9;
$x=90; //redeclare $x
echo $x+$y;
echo "<br/>";



// variable name must start witha letter or an underscore nothing else
// variable name can contin a-Z 0-9 and _

// Following is wrong as it contain special character &
// $na&i="wrong";
// echo $na&i;




// name and NAME are two different variables
$name= "Omair";
$NAME="Aftab ALi";
echo $name ." ". $NAME;
echo "<br/>";




// To get the data type of a variable, use the var_dump() function.
var_dump($x); 
echo "<br/>";
var_dump($NAME);
echo "<br/>";




//CONSTANTS
// constants wo hote hain jo change nhi ho skte in k start main $ b nhi lgta 
 const wo = 9;
echo wo;
echo "<br/>";


//  agar main is ko redeclare krun ga to ye error de ga
// wo=19; its giving error
echo wo; 

?>
 -->








 
<?php

$x=10;
$y=10;
echo $x+$y;
echo "<br/>";

$y=90;
echo $x+$y;
echo "<br/>";


$first_name="omair";
$last_name="aftab";
echo "name : <br/>";

echo $first_name."  ".$last_name;
echo "<br/>";

echo "name in reverse will be : ";
echo "<br/>";
echo $last_name."  ".$first_name;
echo "<br/>";


// To get the data type of a variable, use the var_dump() function.
var_dump($x);
echo "<br/>";
var_dump($first_name);
echo "<br/>";



//CONSTANTS
// constants wo hote hain jo change nhi ho skte in k start main $ b nhi lgta 
const cantbechanged="I cant be changed because i am a constant";
echo cantbechanged;
echo "<br/>";



//convert int into string
$num=500;
$num=(string) $num;
var_dump($num);
echo "<br/>";


?>