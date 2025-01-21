<!-- 
Tugas 5
Buatlah program berdasarkan materi yang sudah diberikan, minimal menggunakan 2 kombinasi materi 
-->

<?php
  for ($bulan = 1;$bulan<=12; $bulan++) {
    echo "Bulan ke- $bulan adalah - ";
  
    switch ($bulan) {
      case '1':
        echo "Januari<br>";
        break;
      case '2':
        echo"Februari<br>";
        break;
      case '3':
        echo "Maret<br>";
        break;
      case '4':
        echo "April<br>";
        break;        
      case '5':
        echo "Mei<br>";
        break;
      case '6':
        echo "Juni<br>";
        break;
      case '7':
        echo "Juli<br>";
        break;
      case '8':
        echo "Agustus<br>";
        break;
      case '9':
        echo "September<br>";
        break;
      case '10':
        echo "Oktober<br>";
        break;
      case '11':
        echo "November<br>";
        break;
      case '12':
        echo "Desember<br>";
        break;
      default:
        echo "Tidak valid<br>";
    }
  }
?>