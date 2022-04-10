<?php 

function hitungUmur($thSekarang, $thLahir){
    $umur = $thSekarang - $thLahir;
    return $umur;
}

echo "Umur saya sekarang adalah (". hitungUmur(2022, 1996).") tahun.";



?>