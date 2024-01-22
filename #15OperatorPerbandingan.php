<?php

var_dump("10" == 10);
var_dump("10" === 10);

var_dump(10 < 9);
var_dump(9 >= 9);

// OPERATOR PERBANDINGAN MEMILIKI BOOLEAN YAITU NILAI TRUE DAN FALSE
$a = 10;
$b = 10;
$c = 5;

//OPERATOR PERBANDINGAN SAMA DENGAN
$SamaDengan = $a == $b;
var_dump($SamaDengan);

//OPERATOR PERBANDINGAN IDENTIK
$identik = $a === $b;
var_dump($identik);

//OPERATOR PERBANDINGAN TIDAK SAMA DENGAN
$TidakSamaDengan = $a != $b;
var_dump($TidakSamaDengan);

//OPERATOR PERBANDINGAN TIDAK SAMA DENGAN
$TidakSamaDengan2 = $a <> $b;
var_dump($TidakSamaDengan2);

//OPERATOR PERBANDINGAN TIDAK IDENTIK
$TidakIdentik = $a !== $b;
var_dump($TidakIdentik);

//OPERATOR PERBANDINGAN KURANG DARI
$KurangDari = $a < $b;
var_dump($KurangDari);

// //OPERATOR PERBANDINGAN KURANG DARI ATAU SAMA DENGAN
$KurangSamaDengan = $a <= $b;
var_dump($KurangSamaDengan);

//OPERATOR PERBANDINGAN LEBIH DARI
$LebihDari = $a > $b;
var_dump($LebihDari);

//OPERATOR PERBANDINGAN LEBIH DARI SAMA DENGAN
$LebihSamaDengan = $a >= $b;
var_dump($LebihSamaDengan);
