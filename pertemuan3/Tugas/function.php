<?php
function tampildate()
{
  $hari = date('l, d m Y');
  $pukul = date('H:m:s');
  echo "Saat ini menunjukkan Hari " . $hari . " pukul " . $pukul;
}
tampildate();
