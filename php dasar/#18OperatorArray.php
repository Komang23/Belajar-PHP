<?php

$first = [
    "first_name" => "Eko"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Khannedy"
];

$full = $first + $last;
var_dump($full);


//  OPERATOR ARRAY
$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

$b = [
    "nama" => "Komang",
    "nama_belakang" => "Redana"
];

//UNION
var_dump("UNION");
$union = $a + $b;               // Menggabungkan array $a dan $b
var_dump($union);

//Equality
var_dump("Equality");
$Equality = $a == $b;           // true jika $a dan $b memiliki key-value sama
var_dump($Equality);

//Identity
var_dump("Identity");
$Identity = $a === $b;          // true jika $a dan $b memiliki key-value sama dan posisi sama
var_dump($Identity);

//Inequality
var_dump("Inequality");
$Inequality = $a != $b;         // true jika $a dan $b tidak sama
var_dump($Inequality);

//Inequality
var_dump("Inequality");
$Inequality = $a <> $b;         //true jika $a dan $b tidak sama
var_dump($Inequality);

//Nonidentity
var_dump("Nonidentity");
$Nonidentity = $a !== $b;       //true jika $a dan $b tidak identik
var_dump($Nonidentity);
