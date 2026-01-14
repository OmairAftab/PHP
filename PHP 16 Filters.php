<?php
$var = 99;

echo $var;
echo "<br/>";

if (filter_var($var, FILTER_VALIDATE_INT)) {
    echo "$var is an integer <br/>";
} else {
    echo "$var isnt an integer <br/>";
}
?>

<table border="2">
  <tr>
    <th>Filter Name</th>
    <th>Filter ID</th>
  </tr>
  <?php

  foreach(filter_list() as $filter){
    echo "<tr><td> $filter </td><td>" .filter_id($filter) . "</td></tr>";
  }
  ?>
</table>



<?php
echo "<br/> <br/>";

$email="omair  aftab@gm ail.com";
echo (filter_var($email,FILTER_SANITIZE_EMAIL)); //It removes illegal characters
echo "<br/>";



// FILTER_VALIDATE_EMAIL checks format . Returns email if valid . Returns false if invalid
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "$email". "  is a valid email";
}else{
    echo "$email". "  is not a valid email";
}
echo "<br/> <br/>";






$url="www.goo  gle.com";

echo (filter_var($url,FILTER_SANITIZE_URL) . "<br/>");

if(filter_var($url,FILTER_VALIDATE_URL)){
    echo $url . " is a Valid url";
}
else{
    echo $url. " is an Invalid url";
}
echo "<br/> <br/>";











// FILTERS ADVANCED 


// Validate an Integer Within a Range
// The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:
$int =100;
$min=1;
$max=200;
if(filter_var($int,FILTER_VALIDATE_INT , array("options"=> array("min_range"=>$min, "max_range"=>$max)))==true){
    echo "Number " .$int. " is valid and is in the range <br/>";
}else{
    echo " The number is not valid or not it in the specified range <br/>";
}



$check=220;
if(filter_var($check,FILTER_VALIDATE_INT , array("options"=> array("min_range"=>$min, "max_range"=>$max)))==true){
    echo "Number " .$check. " is valid and is in the range <br/>";
}else{
    echo " The number " .$check. " is not valid or not it in the specified range <br/>";
}

echo "<br/>";








// Validate URL - Must Contain QueryString

$url1="https://www.w3schools.com";

if(filter_var($url1, FILTER_VALIDATE_URL , FILTER_FLAG_QUERY_REQUIRED)){
  echo("$url1 is a valid URL with a query string");
}
else{
  echo("$url1 is not a valid URL with a query string");
}
echo "<br/> <br/>";



$url2 = "https://example.com/search.php?name=omair";
if(filter_var($url2, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
     echo "Valid URL with query string";
} else {
    echo "Invalid URL or query string missing";
}
?>
