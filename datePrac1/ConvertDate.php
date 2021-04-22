<?php

$dateArr = getdate();

var_dump($dateArr);

echo PHP_EOL;

foreach ($dateArr as $format => $val) {
    echo "$format => $val" . PHP_EOL;
}

echo "weekDay: " . $dateArr["weekday"] . PHP_EOL;
echo "weekDay: " . getdate()["weekday"] . PHP_EOL;
echo "weekDAy: " . getdate()["year"] . PHP_EOL;
