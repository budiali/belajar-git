<?php 
/*

$variable = 0;
switch($variable){
    case <kondisi>:
        break;
    case <kondisi>:
        break;
    default:
}
*/

$level = 2;
switch ($level) {
    case 1:
        echo "Level $level : PHP";
        break;
    case 2:
        echo "Level $level : Python";
        break;
    case 3:
        echo "Level $level : Dart";
        break;
    case 4:
        echo "Level $level : Ruby";
        break;
    default:
        echo "Tidak Tersedia!";
        break;
}

?>