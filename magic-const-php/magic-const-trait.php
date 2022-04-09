<?php 

namespace Enemy;

trait TraitMakhluk
{
    function printNama(){
        echo "Trait / namespace:". __TRAIT__;
    }
}

class ClassMakhluk 
{
    use TraitMakhluk;
}

$new = new ClassMakhluk();
$new->printNama();



?>