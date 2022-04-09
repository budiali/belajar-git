<?php 
/*

Operetor Relasi
Operator relasi adalah operator untuk membadingkan dua buah nilai.
Hasil operasi dari operator relasi akan menghasilkan nilai dengan tipe data "boolean" yaitu,
true (jika benar) dan false (jika salah).
Berikut operator relasi:

lebih besar                     >
lebih kecil                     <
sama dengan                     == atau ===
tidak sama dengan               != atau !==
lebih besar sama dengan         >=
lebih kecil sama dengan         <=

*/

$a = 10;
$b = 5;

echo "Jika 1 adalah (true), jika 0 atau kosong adalah (false) <hr>";

$c = $a > $b;
echo "$a > $b hasilnya $c";
echo "<hr>";

$c = $a < $b;
echo "$a < $b hasilnya $c";
echo "<hr>";

$c = $a == $b;
echo "$a == $b hasilnya $c";
echo "<hr>";

$c = $a != $b;
echo "$a != $b hasilnya $c";
echo "<hr>";

$c = $a >= $b;
echo "$a >= $b hasilnya $c";
echo "<hr>";

$c = $a <= $b;
echo "$a <= $b hasilnya $c";
echo "<hr>";


?>


