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












// Upper Case
// The PHP strtoupper() function returns a string in upper case.
echo strtoupper($kihaal);
echo "<br/>";


// Lower Case
// The PHP strtolower() function returns a string in lower case.
echo strtolower($kihaal);
echo "<br/>";



// Replace String
// The PHP str_replace() function replaces some characters with some other characters in a string.
// Example
// Replace the text "World" with "Dolly":
$change = "Hello World!";
echo str_replace("World", "match khelna?", $change);
echo "<br/>";



// Reverse a String
// The PHP strrev() function reverses a string.
// Example
// Reverse the string "Hello World!":
$name = "   omair      aftab    ";
echo strrev($name);
echo "<br/>";





// Remove Whitespace using trim()
echo trim($name);
echo "<br/>";


?>