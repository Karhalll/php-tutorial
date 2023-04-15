<?php


$cars = ['Honda', 'BMW', 'Toyota'];

// echo $cars;
// print_r($cars);

if (isset($cars[2])) {
    echo $cars[2];
} else {
    echo 'Car does not exist';
}

//associative arrays
$cars2 = [
    'Civic' => 'Honda',
    'X5' => 'BMW',
    'Land Cruiser' => 'Toyota',
    'Civic Type R' => 'Honda'
];

if (isset($cars2['Civic type R'])) {
    echo $cars2['Civic Type R'];
} else {
    echo 'Car does not exist';
}