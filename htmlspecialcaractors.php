<?php
echo htmlspecialchars('<a href="http://www.yahoo.co.jp">test</a>', false, 'UTF-8').PHP_EOL;
echo htmlspecialchars('<a href="http://www.yahoo.co.jp">test</a>', ENT_QUOTES, 'UTF-8').PHP_EOL;
echo htmlspecialchars("<a href='http://www.yahoo.co.jp'>test</a>", ENT_QUOTES, 'UTF-8').PHP_EOL;
