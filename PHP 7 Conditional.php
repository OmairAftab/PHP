<?php

$a=20;
$b=9;

if ($a<10) {
    echo "a is less than 10";
} elseif ($a==10) {
    echo "a equals 10";
} else {
    echo "a is greater than 10";
}

echo "<br/>";

$day="Friday";
switch ($day) {
    case 'Monday':
        echo "Today is Monday";
        break;
    case 'Tuesday':
        echo "Today is Tuesday";
        break;
    case 'Wednesday':
        echo "Today is Wednesday";
        break;
    case 'Thursday':
        echo "Today is Thursday";
        break;
    case 'Friday':
        echo "Today is Friday";
        break;
    case 'Saturday':
        echo "Today is Saturday";
        break;
    case 'Sunday':
        echo "Today is Sunday";
        break;
    default:
        echo "Invalid day";
        break;
    }
?>