<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standard Output
// echo, print
// print_r
// var_dump

// echo "Amin Syakir";
// echo 'Amin Syakir';
// echo 123;
// echo true;

// print_r("syakir");
// var_dump("syakir");

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable dan Tipe Data
// Variable
// tidak boleh bermula dgn angka, tapi boleh mempunyai angka
// echo "Helo, nama saya $nama";
// echo 'Helo, nama saya $nama';

// Operation
// aritmatika
// + - * / %
// $x = 10;
// $y = 65;
// echo $x * $y;

// penggabugn string / concatenation / concat
// .
// $nama_depan = "Amin";
// $nama_belakang = "Syakir";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo "$x";
// $nama = "Amin";
// $nama .= " ";
// $nama .= "Syakir";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identiti
// ===, !==
// var_dump(1 === "1");

// logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
