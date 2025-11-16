<?php

//got jumps to a poition specified jese yahan start k naam se bnaya hai

$count = 1;

start:
echo "Count: $count<br>";
$count++;                   // ye 2 lines bs us time read hon gi jb goto call hua hoga... agar upar se neeche hum code ko dekhte hue aayen to ye nhi chale gi jb tk call na kiya ho

if ($count <= 5) {
    goto start;
}

?>
