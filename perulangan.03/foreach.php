<?php 

$books = [
    "Laravel",
    "Codeigniter",
    "Symphonie",
    "Yii"
];

echo "<h2> Judul Buku <h2>";
echo "<hr>";
echo "<ul>";
    foreach($books as $data){
        echo "<li>$data</li>";
    }
echo "</ul>";

?>