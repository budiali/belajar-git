<?php 

namespace Enemy;

class Makhluk {
    function printNameSpace(){
        echo "cetak namespace :". __NAMESPACE__;
    }

    function printNameFunction(){
        echo "cetak nama function :" . __FUNCTION__;
    }

    function printNameMethod(){
        echo "cetak nama Methof :" . __METHOD__;
    }
}

$nameSpace = new Makhluk();
$nameSpace->printNameSpace();


?>