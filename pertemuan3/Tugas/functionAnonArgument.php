<?php
function sapaan(string $name, $filter)
{
  $teks = $filter($name);
  echo "Selamat Datang $teks di Toko Kami.";
}

sapaan("Muhammad Fauzan", function (string $name): string {
  return strtoupper($name);
});
