<?php 
$grade = 78;
if($grade < 60){
    echo "Nilai anda $grade (D)";
} else if($grade <= 70){
    echo "Nilai anda $grade (C)";
} else if($grade <= 80){
    echo "Nilai anda $grade (B)";
}else{
    echo "Nilai anda $grade (A)";
}

?>