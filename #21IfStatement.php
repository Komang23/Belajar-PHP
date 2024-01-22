<?php

$Nilai = 80;
$Absen = 90;

//Kode : If Statement
if ($Nilai >= 80 && $Absen >= 80) {               // jika nilai expression true maka statement akan di jalankan 
    echo "Kamu Lulus" . PHP_EOL;                  // jika nilai expressio false maka statement tidak akan di jalankan
}

// Kode : Else Statement
if ($Nilai >= 90 && $Absen >= 100) {
    echo "Kamu Lulus" . PHP_EOL;
} else {
    echo "Kamu Tidak Lulus" . PHP_EOL;            // jika nilai expressio false maka statement akan di jalankan
}






//Kode : Else If Statement
$nilai = 10;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {  // jika true statement akan di eksekusi jika tiak akan ke else if selajutnya
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}


if ($nilai >= 80 && $absen >= 80):
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):      // jika true statement akan di eksekusi jika tiak akan ke else if selajutnya
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D" . PHP_EOL;
else:
    echo "Nilai Anda E" . PHP_EOL;
endif;