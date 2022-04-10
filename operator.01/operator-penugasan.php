<?php 

// = adalah operator assigment
// $a = 32;

/*
pengisian                           =
pengisian dan penambahan            +=
pengisian dan pengurangan           -=
pengisian dan perkalian             *=
pengisian dan pembagian             /=
pengisian dan pemangkatan           **=
pengisian dan sisa bagi / modulo    %=
pengisian dan penggabungan (string) .=
*/

/*
perbedaan operator aritmatika dan operator penugasan
operator penugasan mengisi nilai dan menghitung nilai dengan operasi aritmatika
operator aritmatika berfungsi untuk menghitung saja
*/

$speed = 10;
$speed = $speed + 10; // => operator aritmatika
echo "Menggunakan operator Aritmatika : ".$speed."<br>";
echo "Menggunakan operator Penugasan dan operasi Aritmatika :".$speed += 20; // => oprator penugasan

?>