<?php
function cekKategoriUsia($umur)
{
  if ($umur <= 5) {
    return "Balita";
  } else if ($umur <= 12) {
    return "Anak-anak";
  } else if ($umur <= 17) {
    return "Remaja";
  } else if ($umur <= 60) {
    return "Dewasa";
  } else {
    return "Lansia";
  }
}

$umur_seseorang = 24;
$kategorinya = cekKategoriUsia($umur_seseorang);
echo "Orang dengan usia $umur_seseorang termasuk kategori $kategorinya";
