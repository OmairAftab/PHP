<?php

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
echo "<br/>";


// With the continue statement we can stop the current iteration, and continue with the next:
$j = 0;
while ($j < 6) {
  $j++;
  if ($j == 3) continue;
  echo $j;
}
echo "<br/>";



// The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.
$k=5;
do {
    # code...
    echo "I am inside do while";
} while ($k<4);
echo "<br/>";




// for loop
for ($l = 0; $l <= 7; $l++) {
  echo "The number is: $l <br>";
}





// The most common use of the foreach loop, is to loop through the items of an array.
$arr=array("omair","awais","aakif","moiz");
foreach ($arr as $name) {
    echo $name;
    echo "<br/>";
}



// for assosiative array:
    $assarray=array("Babar"=>"56","RizuSymmonds"=>"16","Shaheen"=>"10","Foji"=>"39");
    foreach ($assarray as $key => $value) {
        # code...
        echo $key . ":" . $value;
           echo "<br/>";
    }

?>