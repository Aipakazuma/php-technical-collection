<?php

$a = [1, 2, 3];
$b = [4, 5, 6];
$z = array_map(null, $a, $b);
print_r($z);

$c = [1, 2];
$x = array_map(null, $c, $b);
print_r($x);
