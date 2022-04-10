<?php 

$umur = 19;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "Halo Pak! <br>";
    }else{
        echo "Halo Pemuda! <br>";
    }
}else{
    echo "Website only years old 18+";
}

?>