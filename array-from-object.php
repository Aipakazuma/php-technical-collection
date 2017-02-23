<?php

class User
{
  public $user = 10;
  public $data = 20;
}

$user = new User();
echo $user->user . PHP_EOL;
echo $user->data . PHP_EOL;

echo $user['user'] . PHP_EOL;
echo $user['data'] . PHP_EOL;
