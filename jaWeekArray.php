<?php
$jaWeekArray = ['日', '月', '火', '水', '木', '金', '土'];
echo $jaWeekArray[(new Datetime())->format('w')];
