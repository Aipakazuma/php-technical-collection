<?php

function paginate($page, $limit = 10)
{
  if ($page === null) {
    $page = 1;
  }
  $offset = ($page - 1) * $limit;
  return $offset;
}

echo paginate(1) . PHP_EOL;
echo paginate(2) . PHP_EOL;
echo paginate(3) . PHP_EOL;

