<?php


//UNCOMMENT EACH PART SEPARATELY AND EXECUTE IT IS LIYE DIVIDE KIYA HAIN HAR AIK KA APNA APNA KAAM A DONT UNCOMMENT ALL AT ONCE AND EXECUTE


// echo "<pre>";
// echo readfile("text.txt");
// echo "<pre>";






// $myfile = fopen("text.txt", "r") ;
// echo fgets($myfile);

// fclose($myfile);







// $myfile = fopen("text.txt", "r");

// while(!feof($myfile)){
//     echo fgets($myfile);
//     echo "<br/>"; 
// }
// echo "<br/>";






// $myfile = fopen("text.txt", "r");

// while(!feof($myfile)){
//     echo fgetc($myfile);
// }












// The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.
// If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).
$ffile=fopen("testfile.txt","w");
$txt="i am text";
fwrite($ffile,$txt);
fclose($ffile);

echo readfile("testfile.txt"); 
echo "<br/>";
// You can append data to a file by using the "a" mode.
$myfile=fopen("testfile.txt","a");
$addd=" hellllllllooooooo";
fwrite($myfile,$addd);
fclose($myfile);
echo readfile("testfile.txt");
?>