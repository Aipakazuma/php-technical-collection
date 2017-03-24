<?php

session_start();

$_SESSION['test'] = 'Hello world!';

echo $_SESSION['test'] . PHP_EOL;

ob_start();

include './index.php';

ob_end_flush();
ob_get_clean();

echo $_SESSION['test'] . PHP_EOL;
