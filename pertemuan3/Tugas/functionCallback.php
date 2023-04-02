<?php
function variasi(string $name, callable $filter)
{
  $text = call_user_func($filter, $name);
  echo $text . PHP_EOL;
}

variasi("ini text dengan huruf besar semua", "strtoupper");
variasi("Ini TEXT DENGAN HURUF KECIL SEMUA", "strtolower");
variasi("ini text dengan huruf besar hanya diawal kata", "ucwords");
