<?php

require '../vendor/autoload.php';

echo 'Сайт заработал. Этот файл лежит тут: ';

echo __FILE__;

echo '<hr>';

echo 'Пример расчета: 10 + 15 = ';

echo (new \App\Calculator())->sum(10, 15);
