<!-- 
Tugas 2
Buatlah array yang berisikan nilai siswa (contoh : [80,75,45,65,70])
Lalu lakukan perulangan untuk mencetak nilai siswa tersebut :
"Lulus" jika nilai >= 60
"Tidak Lulus" jika nilai < 60
Contoh :
"nilai anda" adalah 69, mohon maaf anda belum lulus"
"nilai anda adalah 75, selamat anda sudah lulus" 
-->

<?php
  $arrays = [90,80,70,65,50];
  foreach ($arrays as $array) {
      if ($array>60){
          echo "nilai anda adalah $array, selamat anda sudah lulus <br>";
      }else{
          echo "nilai anda adalah $array, mohon maaf anda belum lulus <br>";
      }
  }
?>