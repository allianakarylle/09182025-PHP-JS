<?php

// $age = 10;

// if ($age <= 10) {
//     echo "Too young to watch Harry Potter";
// } else if ($age < 15) {
//     echo "You may watch Harry Potter";
// } else {
//     echo "You should watch Harry Potter";
// }

// $age = 15;
// $watched = false;

// if ($age >= 15 && !$watched) {
//     echo 'You MUST watch Harry Potter';
// }

// if ($age >= 15 || !$watched) {
//     echo 'You should watch Harry Potter';
// }

$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid day";
}

