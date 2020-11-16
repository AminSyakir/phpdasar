<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");
echo "<br>";

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Jnuari 1970
// echo time();
// echo date("l, d M Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, minit, detik, bulan, hari, tahun
// echo date("l", mktime(0, 0, 0, 8, 25, 1985));

// strtotime
echo date("l", strtotime("25 aug 1985"));
