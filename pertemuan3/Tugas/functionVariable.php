<?php 
function kapital(string $name, $filter="strtoupper") {
    $text = $filter($name);
    echo $text . PHP_EOL;
}
function kecil(string $name1, $filter1="strtolower") {
    $text1 = $filter1($name1);
    echo $text1 . PHP_EOL;
}
function awalkata(string $name2, $filter2="ucwords") {
    $text2 = $filter2($name2);
    echo $text2 . PHP_EOL;
}

kapital("ini text dengan huruf besar semua");
kecil("INI TEXT DENGAN HURUF KECIL SEMUA");
awalkata("ini text dengan huruf besar hanya di awal kata");
