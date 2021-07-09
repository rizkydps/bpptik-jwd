<?php

echo "========== CETAK BILANGAN  GANJIL GENAP 1-100 ==========</br>";
// Kode akan di jalankan 1 hingga 100
for ($x = 1; $x <= 100; $x++) {
    echo $x;
    if ($x % 2 == 0) {
        echo " adalah bilangan genap</br>";
    } else if ($x % 2 == 1) {
        echo " adalah bilangan ganjil</br>";
    } else {
        echo "tidak ada";
    }
}
