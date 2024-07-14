<?php

$num =[1, 4, 7, 8, 50, 56, 76, 54, 23];

usort($num, function($a, $b){
    return $a <=> $b;
});

// echo var_export($num); 
// var_dump($num);
print_r($num); 

?>