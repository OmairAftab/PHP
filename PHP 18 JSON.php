<?php

// json_encode()
// json_decode()



// The json_encode() function is used to encode a value to JSON format.

$age=["omair"=>20, "haris"=>20, "shoaib"=>22];
echo json_encode($age);
echo "<br/>";


$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo "<br/>";





// The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
$jsonobj='{"name":"ali","fname":"hussain"}';
$obj=json_decode($jsonobj);
echo $obj->name;
echo "<br/>";


// The json_decode() function returns an object by default. The function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
// Example
// This example decodes JSON data into a PHP associative array:

$jobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jobj, true);  // ✅ store result
echo "<br/>";

var_dump($arr);
echo "<br/>";

echo $arr["Peter"];  // ✅ works


?>