<?php

$names = ["Eko", "Kurniawan", "Khannedy"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;    //INI CONTOH PERULANGAN ARRAY TIDAK MENGGUNAKAN FOREACH
}

foreach ($names as $index => $name) {            // INI CONTOH PERULANGAN ARRAY MENGGUNAKAN FOREACH
    echo "Data ke $index = $name" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

