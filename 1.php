<?php
echo 'a = ' . $a = 1200;
echo ' คัน <br>';
echo 'b = ' . $b = 95;
echo ' คัน <br>';
echo 'c = ' . $c = 115;
echo ' คัน <br>';
$totel = $a + $b + $c;

echo 'จงหาว่าปีที่ผ่านมาขายแต่ละรุ่นไปเป็นจำนวนกี่ % จากยอดขายรถทั้งหมด <br>';
$PercentA = number_format(100 * $a / $totel,2);
$PercentB = number_format(100 * $b / $totel,2);
$PercentC = number_format(100 * $c / $totel,2);

echo "Sum a : {$PercentA} %<br>";
echo "Sum b : {$PercentB} %<br>";
echo "Sum c : {$PercentC} %<br>";
