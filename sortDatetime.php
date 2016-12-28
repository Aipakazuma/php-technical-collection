<?php

$stringDatetime = ['10:00', '17:00', '02:23', '01:24', '23:30'];
var_dump($stringDatetime);

// 全部datetime objectへ変換
$objectDatetime = [];
foreach($stringDatetime as $timeString) {
  $objectDatetime[] = new Datetime($timeString);
}
printf('max: %s'.PHP_EOL, max($objectDatetime)->format('H:i'));
printf('min: %s'.PHP_EOL, min($objectDatetime)->format('H:i'));
sort($objectDatetime);
var_dump($objectDatetime);
