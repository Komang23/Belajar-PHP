<?php

for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;                              //UNTUK MENGSKIP PERULANGAN DAN MELAJUTKAN PERULANGAN BERIKUTNYA
    }
    echo "Counter : $counter" . PHP_EOL;
}
