<!-- <?php

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";






function localscope(){
  $local=7;
  echo "The value of local variable is $local";
}
localscope();
echo "<br/>";
  echo "The value of local variable is $local";  //here will be error
echo "<br/>";











//   PHP The global Keyword
// The global keyword is used to access a global variable from within a function.

// To do this, use the global keyword before the variables (inside the function):

  $bahir1="outside1";
  $bahir2="outside2";

  function globalkeyword(){
    global $bahir1,$bahir2;
    echo "Using variables inside the function using global variable: ";
    echo $bahir1 ." ". $bahir2;
  }
  globalkeyword();
echo "<br/>";








//   PHP The static Keyword
// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

// To do this, use the static keyword when you first declare the variable:
// function withoutstatic(){
//   $count=0;
//   echo $count;
//   $count++;
// }
// withoutstatic();
// withoutstatic();
// withoutstatic();
// echo "<br/>";


// function withstatic(){
// static $count=0;
//   echo $count;
//   $count++;
// }
// withstatic();
// withstatic();
// withstatic();


?> -->









<?php

$a=10;
echo "Calling global variable outside function.. whose value is : $a";
echo "<br/>";


function inside(){
  echo "The function is calling global variable whose value is : $a";
}
inside();
echo "<br/>";



function testlocalvariable(){
  $b=90;
    echo "The function is calling local variable and its value is : $b";
}

testlocalvariable();
echo "<br/>";

echo "The function is calling local variable outside the function and its value is : $b";
echo "<br/>";






//   PHP The global Keyword
// The global keyword is used to access a global variable from within a function.

// To do this, use the global keyword before the variables (inside the function):

  $c=3;

  function testglobalvar(){
    global $c;
    echo "The global variable is used inside a function using the global keyword. Its value is : $c";
    echo "<br/>";
  }
  testglobalvar();



  

//   PHP The static Keyword
// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

// To do this, use the static keyword when you first declare the variable:

function withoutstatic(){
  $count=0;
  echo "$count";
  echo "<br/>";
  $count++;
}
withoutstatic();
withoutstatic();
withoutstatic();
    echo "<br/>";



function withstatic(){
  static $count=0;
  echo "$count";
  echo "<br/>";
  $count++;
}
withstatic();
withstatic();
withstatic();





?>