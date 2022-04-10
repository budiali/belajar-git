<?php 
//array kosong
$buah = array();
$sayur = [];

//array dan isi
$mhs = array("Angga","Santi","Nuni");
$matkul = ["psbo","database administrator","pemrograman"];
$matkul[3] = "akuntansi";

//mengisi array dengan indeks tertentu
$anggota[0] = "pemuda pancasila";
$anggota[1] = "ormas";
$anggota[2] = "komunitas";
$anggota[] = "komunitas 2"; // dengan tidak memberikan nomer indek otomatis data akan menjadi indeks terakhir

// unset($anggota[0]); // digunakan untuk menghapus elemen array

//mengisi array dengan data campuran
$campuran = ["Nanas",2000, 3.24, true];

// for($i=0; $i < count($matkul); $i++){
//     echo "Matakuliahnya : $matkul[$i] <br>";
// }

// $i = 0;
// while($i < count($matkul)){
//     echo "$matkul[$i] <br>";
//     $i++;
// }

// $i=0;
// do{
//     echo "=> $matkul[$i] <br>";
//     $i++;
// }while($i < count($matkul))

foreach($anggota as $m){
    echo "anggota : $m <br>";
}

// print_r($anggota);


?>