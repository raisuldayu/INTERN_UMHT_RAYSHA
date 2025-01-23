<?php
// Looping pada Array
// for / foreach
$days = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>
  <?php for ($i = 0; $i < count($days); $i++): ?>
    <div class="kotak"><?= $days[$i]; ?></div>
  <?php endfor; ?>

  <div class="clear"></div>

  <?php foreach ($days as $day): ?>
    <div class="kotak"><?= $day; ?></div>
  <?php endforeach; ?>

</body>

</html>