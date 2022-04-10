<?php 

/*
Operator Logika

Operator logika digunakan untuk operasi Logika seperti AND, OR dan NOT

logika AND                      &&
logika OR                       ||
logika negasi/kebalikan/NOT     !
*/

$a = true;
$b = false;

$c = $a && $b;
printf("%b && %b = %b", $a, $b, $c);
echo "<hr>";

$c = $a || $b;
printf("%b || %b = %b", $a, $b, $c);
echo "<hr>";

$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";
?>

