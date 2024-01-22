<?php


// Operator Increment dan Decrement Untuk Menaikan Dan Menurunkan Angka
$a = 10;

$b = ++$a;

var_dump($a);
var_dump($b);


// Post increment 
echo "Post increment";

$PostIncrement = 10;
var_dump($PostIncrement++);
var_dump($PostIncrement);          // Kembalikan $a lalu naikkan 1 angka

// Pre increment
echo "Pre increment";

$PreIncrement = 10;
var_dump(++$PreIncrement);
var_dump($PreIncrement);        // Naikkan $a satu angka, lalu kembalikan $a

//Post decrement
echo "Post decrement";

$PostDecrement = 10;
var_dump($PostDecrement--);
var_dump($PostDecrement);         // Kembalikan $a lalu turunkan 1 angka

//Pre decrement
echo "Pre decrement";

$PreDecrement = 10;
var_dump(--$PreDecrement);
var_dump($PreDecrement);          // Turunkan $a satu angka, lalu kembalikan $a



