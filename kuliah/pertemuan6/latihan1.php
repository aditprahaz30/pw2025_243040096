<?php
// membuat array
$hari = array("Senin", "Selasa", "Rabu",);
$bulan = ["Januari", 'Februari', "Maret"];
$myArray = ["Aditya", 39, true];

// Mencetak/Menampilkan Array
// Menampilkan seluruh isi (hanya untuk debugging)

var_dump($hari);
echo '<br>';
print_r($bulan);
echo '<br>';
// Gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo '<br';
echo $myArray[0];
echo '<hr>';
echo $hari[1];

// Menambah isi array
// gunakan []
$hari [] = 'kamis';
$hari [] = "jum'at";

print_r($hari);
echo "<br>";
