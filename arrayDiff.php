<?php

// $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
// $array2 = array("a" => "green", "yellow", "red");
// $result = array_diff_assoc($array1, $array2);
// print_r($result);

$array2 = ['2016' => [
  [
    'before' => 10,
    'after' => 20
  ]
]];

$array3 = ['2016' => [
  [
    'before' => 20,
    'after' => 30
  ]
]];

print_r(array_diff_assoc($array2['2016'][0], $array3['2016'][0]));
