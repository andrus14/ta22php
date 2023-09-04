<?php

$myData = [
    'first_name' => 'Andrus',
    'last_name' => 'Naulainen',
    'location' => 'Kudjape'
];

echo "<pre>";

$i = 0;

foreach ( $myData as $key => $value ) {

    $value = strtoupper($value);

    echo "{$key}: " . $value . "\n";

};

var_dump($myData);

echo "</pre>";