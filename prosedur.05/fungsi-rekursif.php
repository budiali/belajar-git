<?php 

/*
Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. Fungsi ini biasanya digunakan untuk menyelesaikan masalah sepeti faktorial, bilangan fibbonaci, pemrograman dinamis, dll.
*/

function faktorial($angka){
    if($angka < 2){
        return 1;
    } else{
        return ($angka * faktorial($angka-1));
    }
}

echo "faktorial 5 adalah : ".faktorial(5);

?>