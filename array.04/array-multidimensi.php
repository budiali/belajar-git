<?php 

$matrik = [
    [3,6,4],
    [2,10,8],
    [6,24,90],
];

// print_r($matrik[1][2]); //output 8

$artikel = [
    [
        "judul" => "Belajar bahasa pemrograman PHP",
        "penulis" => "petani kode",
    ],
    [
        "judul" => "Belajar bahasa pemrograman Python",
        "penulis" => "petani kode",
    ],
    [
        "judul" => "Belajar bahasa pemrograman Ruby",
        "penulis" => "petani kode",
    ],
];

foreach($artikel as $a){
    echo "Judul Buku : " . $a["judul"] ."<br>";
    echo "Penulis : " . $a["penulis"] ."<br>";
}

?>