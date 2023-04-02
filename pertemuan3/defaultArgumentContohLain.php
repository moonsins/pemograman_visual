<?php

function perkenalan($nama, $salam = "Assalamualaikum")
{
  echo $salam . ", ";
  echo "Perkenalkan, Nama Saya " . $nama . PHP_EOL;
  echo "Senang Berkenalan Dengan Anda" . PHP_EOL;
}

perkenalan("Muhammad Fauzan");
