<?php 

function hitungUmur($thSekarang, $thLahir){
    $umur = $thSekarang - $thLahir;
    return $umur;
}

function perkenalan($salam = "Assalamualaikum", $nama, $thSekarang, $thLahir){
    echo $salam.", ";
    echo "Nama saya $nama <br>";
    echo "Umur saya sekarang ". hitungUmur($thSekarang, $thLahir)." tahun";
    echo "<hr>";
}

$slm = "Selamat Pagi";
$nama = "Muhammad Sultan Ali";
perkenalan("Hi", "Budi Ali", 2022, 1996);
perkenalan($slm, $nama, 2022, 2020);

?>