<?php

function test($number, $digit) {
	return round($number, $digit);
}

// 普通はこんな感じ
echo test(150, -2).PHP_EOL;


// n桁からm桁まで四捨五入
function roundUntilNDigit($number, $digit) {
    for ($i = -1; $digit <= $i; $i--) {
        $number = round($number, $i);
    }
    return $number;
}

echo test(1450, -3).PHP_EOL; // 1000
echo roundUntilNDigit(1450, -3).PHP_EOL; // 2000
