<?php 

class ClassName 
{
    function printNameClass(){
        echo "cetak nama kelas :". __CLASS__;
    }
}

$new = new ClassName();
$new->printNameClass();

?>