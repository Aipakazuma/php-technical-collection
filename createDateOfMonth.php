<?php
/**
 * YYYYMMDDの形でパスしてください
 */
function createDateOfMonth($targetYearMonthDate = null)
{
    $dateObject = new Datetime();
    if (! empty($targetYearMonthDate)) {
        $dateObject = new Datetime($targetYearMonthDate);
    }

    // 指定日付の最初の日付を取得
    $firstObject = clone $dateObject;
    $firstObject->modify('first day of this month');

    // 指定日付の月最後の日付を取得
    $lastObject = clone $dateObject;
    $lastObject->modify('last day of this month');

    $dateObjectArray = [];
    while(true) {
        if ($lastObject < $firstObject) {
            break;
        }
        $dateObjectArray[] = clone $firstObject;
        $firstObject->modify('+1 days');
    }
    return $dateObjectArray;
}

var_dump(createDateOfMonth()); // this month
var_dump(createDateOfMonth('2017/02/01')); // 2017/02
