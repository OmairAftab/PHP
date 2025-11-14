<?php

// Double quoted string literals perform operations for special characters:
$x = "John";
echo "Hello $x";




// Single quoted string literals returns the string as it is:
$x = "John";
echo 'Hello $x';
echo "<br/>";



// String Length
// The PHP strlen() function returns the length of a string.
// Example
echo strlen($x);
echo "<br/>";



// Word Count
// The PHP str_word_count() function counts the number of words in a string.
// Example
// Count the number of word in the string "Hello world!":
echo str_word_count("My name is omair");
echo "<br/>";




// Search For Text Within a String
// The PHP strpos() function searches for a specific text within a string.
// If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
// Example
echo strpos("My name is Mohammad Omair Aftab","Omair");
echo "<br/>";
$kihaal="ki haal a theek o na? khush o?";
echo strpos($kihaal,"khush");
echo "<br/>";

?>