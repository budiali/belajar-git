<?php 

namespace Enemy;

class Makhluk {
    function printNameSpace(){
        echo "cetak namespace : ". __NAMESPACE__ . "<br/>";
    }

    function printNameFunction(){
        echo "cetak nama function : " . __FUNCTION__ . "<br/>";
    }

    function printNameMethod(){
        echo "cetak nama Method : " . __METHOD__ . "<br/>";
    }
}

$nameSpace = new Makhluk();
$nameSpace->printNameSpace();
$nameSpace->printNameFunction();
$nameSpace->printNameMethod();


?>