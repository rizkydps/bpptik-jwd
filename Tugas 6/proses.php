<?php

$x = 9;
$y = 3;

echo "Bilangan 1 : {$x}<br/>";
echo "Bilangan 2 : {$y}<br/>";

echo "=================================== <br/>";
// FUngsi penjumlahan
function functionPenambahan($x, $y)
{
    $HasilPenambahan = $x + $y;
    return $HasilPenambahan;
}
// FUngsi Perkalian
function functionPerkalian($x, $y)
{
    $HasilPerkalian = $x * $y;
    return $HasilPerkalian;
}
// Fungsi Pengurangan
function functionPengurangan($x, $y)
{
    $HasilPengurangan = $x - $y;
    return $HasilPengurangan;
}
// Fungsi Pembagian
function functionPembagian($x, $y)
{
    $HasilPembagian = $x / $y;
    return $HasilPembagian;
}

// HAsil dari seluruh fungsi (Rizky DWi Putra Sidik)
echo "Hasil Penjumlahan adalah :" . functionPenambahan(9, 3) . "<br/>";
echo "Hasil Pengurangan adalah :" . functionPengurangan(9, 3) . "<br/>";
echo "Hasil Perkalian adalah :"  . functionPerkalian(9, 3) . "<br/>";
echo "Hasil Penjumlahan adalah :" . functionPembagian(9, 3) . "<br/>";
