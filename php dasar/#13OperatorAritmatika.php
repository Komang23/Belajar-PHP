<?php

$a = 10;
$b = 10;

// OPERATOR PENJUMLAHAN
$penjumlahan = $a + $b;
var_dump($penjumlahan);

//OPERATOR PENGURANGAN
$pengurangan = $a - $b;
var_dump($pengurangan);

//OPERATOR PERKALIAN
$perkalian = $a * $b;
var_dump($perkalian);

// OPERATOR PEMBAGIAN 
$pembagian = $a / $b;
var_dump($pembagian);

// MENGNGUBAH VARIABEL POSITIVE KE NEGATIVE
$resultNegative = -$penjumlahan;
var_dump($resultNegative);

// MENGNGUBAH VARIABEL NEGATIVE KE POSITIVE
$resultPositive = +$penjumlahan;
var_dump($resultPositive);

// OPERATOR SISA BAGI
$resultModulo = 100 % 3;
var_dump($resultModulo);

//OPERATOR PANGKAT
$pangkat = $a ** 2;
var_dump($pangkat);