<?php 

// function perkenalan($nama, $salam){
//     echo $salam.", Nama Saya $nama <br>";
//     echo "Senang berkenalan dengan anda<br>";
//     echo "<hr>";
// }
// perkenalan();

//dengan parameter default
function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.", <br>";
    echo "Nama saya $nama <br>";
    echo "Senang berkenalan dengan anda!";
    echo "<hr>";

}

perkenalan("Ulil Albab");
$nama = "Indriyani";
$slm = "Halo";
perkenalan($nama, $slm);



?>