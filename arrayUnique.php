<?php

$array = [
  [
    'day' => '20',
    'test' => 'test'
  ],
  [
    'day' => '30',
    'test' => 'test2'
  ],
  [
    'day' => '30',
    'test' => 'test2'
  ]
];
var_dump(array_unique($array));
