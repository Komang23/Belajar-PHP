<?php

var_dump(true && true);
var_dump(true && false);

var_dump(true || false);
var_dump(true || true);

var_dump(true xor false);
var_dump(true xor true);

var_dump(!true);
var_dump(!false);

// OPERATOR LOGIKA ADALAH OPERATOR PERBANDINGAN NILAI BOOLEAN 

$a = true;
$b = false;


// OPERATOR LOGIKA AND 
$and = $a && $b;
var_dump($and);             //true jika $a dan $b keduanya true

// OPERATOR LOGIKA AND
$and2 = $a and $b;
var_dump($and2);            //true jika $a dan $b keduanya true

// OPERATOR LOGIKA NOT
$not = !$a;
var_dump($not);             //true jika $a bernilai false     

// OPERATOR LOGIKA  OR
$or = $a || $b;
var_dump($or);              // true jika $a dan $b salah satu atau keduanya true

// OPERATOR LOGIKA OR
$or2 = $a or $b;
var_dump($or2);             //true jika $a dan $b salah satu atau keduanya true 

// OPERATOR LOGIKA XOR
$xor = $a xor $b;
var_dump($xor);             //true jika $a dan $b salah satu true, tapi tidak keduanya



