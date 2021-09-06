<?php
    $angka_a='10';
    $angka_b='2';

    $tambah = $angka_a + $angka_b;
    $kurang = $angka_a - $angka_b;
    $kali = $angka_a * $angka_b;
    $bagi = $angka_a / $angka_b;
    $modulus = $angka_a % $angka_b;

    echo "<h3>Hasil Operasi Menggunakan Operator Aritmatika</h3>";
    echo "penjumlahan ".$angka_a." + ".$angka_b." = ".$tambah." <br>";
    echo "penjumlahan ".$angka_a." + ".$angka_b." = ".$tambah."<br>";
    echo "pengurangan ". $angka_a." - ". $angka_b." = ". $kurang."<br>";
    echo "perkalian ". $angka_a." x ". $angka_b." = ". $kali."<br>";
    echo "pembagian ". $angka_a." : ". $angka_b." = ". $bagi."<br>";
    echo "modulus ". $angka_a." % ". $angka_b." = ". $modulus."<br>";
?>