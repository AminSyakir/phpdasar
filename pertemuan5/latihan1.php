<?php
// array
// variable yg dapat memiliki byk nilai
// elemen pada array bole memiliki tipe dara yang berbeza
// pasangan antara key dan value
// key-nye adalah index mula dari 0

// membuat array
// cara lama
$hari = array("Isnin", "Selasa");

// cara baru
$bulan = ["Januari", "Februari"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump()/print_r()
// var_dump($hari);
// echo "<br>";
// print_r($hari);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru apa array
var_dump($hari);
$hari[] = "Khamis";
echo "<br>";
var_dump($hari);
