<?php

$nama_depan = "Muhammad";
$nama_belakang = "Fauzan";

//anonymous function
$sayHi = function () use ($nama_depan, $nama_belakang) {
  echo "Hi $nama_depan $nama_belakang" . PHP_EOL;
};
$sayHi();
