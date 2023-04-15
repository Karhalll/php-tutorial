<?php

// $result = 1 > 3; //true

$first_name = 'Martin';
$last_name = 'Fucik';

if ($first_name == 'martin' || $last_name == "FuCik") {
    echo 'The first condition is true';
} else if ($first_name != "Martin" && $last_name == "Fucik") {
    echo 'The second condition is true';
} else {
    echo "The conditions are false";
}