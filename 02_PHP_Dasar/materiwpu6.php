<?php
// dATE
// Untuk menampilkan tanggal dengan format tertentu
//*echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1978
//*echo time();
//*echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
//*echo date("l", mktime(0,0,0,8,25,1985))

// strtotime
//*echo date("l", strtotime("23 juni 2008"));

?>

<?php 
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Raysha"); ?></h1>
</body>
</html>