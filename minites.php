<?php

$time = (new Datetime())->format('H:i');
(new Datetime($time))->format('');
