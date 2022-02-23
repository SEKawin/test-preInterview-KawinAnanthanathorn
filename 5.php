<?php

//สูตร ผลรวม = (ต้น+ปลาย) x เทอม/2
$n = 1;
$m = 5;
$sum = ($n + $m) * ($m - $n + 1) / 2;
echo "a. Sum between $n - $m = $sum\n";
echo '<br>';

$n = 3;
$m = 5;
$sum = ($n + $m) * ($m - $n + 1) / 2;
echo "b. Sum between $n - $m = $sum\n";
echo '<br>';

$n = 1;
$m = 99;
$sum = ($n + $m) * ($m - $n + 1) / 2;
echo "c. Sum between $n - $m = " . number_format($sum);
echo '<br>';

$n = 446;
$m = 779;
$sum = ($n + $m) * ($m - $n + 1) / 2;
echo "f. Sum between $n - $m = " . number_format($sum);
echo '<br>';

$n = 3;
$m = 1099;
$sum = ($n + $m) * ($m - $n + 1) / 2;
echo "f. Sum between $n - $m = " . number_format($sum);
echo '<br>';

$n = 34;
$m = 1000000;
$sum = ($n + $m) * ($m - $n + 1) / 2;
echo "f. Sum between $n - $m = " . number_format($sum);
echo '<br>';
