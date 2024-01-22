<?php
// ini sama dengan for loop tapi lebih sederhana

$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while ($counter <= 10):
    echo "Ini adalah for while ke-$counter" . PHP_EOL;      //ini jika tidak menggunakan kurung kurawa
    $counter++;
endwhile;