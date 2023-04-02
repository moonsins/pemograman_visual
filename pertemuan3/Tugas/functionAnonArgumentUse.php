<?php
$lebar = 20;
$panjang = 15;
$tinggi = 6;

$volumBalok = function () use ($lebar, $panjang, $tinggi) {
  $hasil = $lebar * $panjang * $tinggi;
  echo "Dengan lebar bangunan = " . $lebar . " m dan panjang bangunan = " . $panjang . " m dan tinggi bangunan = " . $tinggi .
    " m maka volumenya adalah " . $hasil . " m³";
};
$volumBalok();
