<?php

echo "Today is " .date("d/m/Y") . "<br/>"; 
echo "Today is " .date("d-m-Y") . "<br/>"; 

echo "The day today is : " .date("l"); echo "<br/>";

echo "The month is : " .date("F"); echo "<br/>";


echo "The time is ". date("h:i:s a") ."<br/>" ;


// To get the date and time to be correct according to a specific location, also set the timezone you want to use, with the date_default_timezone_set() function.
date_default_timezone_set("Asia/Karachi");
echo "The date & time here at Islamabad is : ". date("d-m-Y  h:i:s a");
echo "<br/>";







echo "Now : ". time() ."<br/>"; 

// Here we format the timestamp to a readable date and time:

    $ts=time();//get current unix timestamp
    
    //formate time stamp:
    $currtime=date("y-m-d  h:i:s",$ts);

    echo $currtime;
    echo "<br/>";



?>