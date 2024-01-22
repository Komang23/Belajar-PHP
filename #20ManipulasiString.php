<?php

// Menggabungkan beberapa data menggunakan dot atau titik


$name = "Eko Kurniawan Khannedy";
echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// Konversi ke Number dan Sebaliknya


$valueString = (string) 100;             //mengubah dari int ke string 
var_dump($valueString);

$valueInt = (int) "100";                 //mengubah dari string ke int
var_dump($valueInt);

$valueFloat = (float) "1.01";            //mengubah dari string ke float
var_dump($valueFloat);


// Mengakses Karakter
//String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

//Variable Parsing
//Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;       //before   
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;               //after


// Kode : Curly Brace
$var = "Eko";
echo "This is {$var}s" . PHP_EOL;    // jika menambahkan variabel tampa sepasi