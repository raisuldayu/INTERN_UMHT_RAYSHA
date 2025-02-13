<?php
require 'function.php';

$id = $_GET['id'];
$berita = query("SELECT * FROM berita WHERE id=$id")[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
      echo "
      <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
      ";
    } else {
      echo "
      <script>
        alert('Data Gagal ditambahkan!');
        document.location.href = 'index.php';
      </script>
      ";
      echo "<br>";
      echo mysqli_error($conn);
    }
  }
// if (isset($_POST['submit'])) {
//     $gambar = $_FILES['gambar']['name'] ? $_FILES['gambar']['name'] : $berita['gambar'];
//     move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads/" . $gambar);
//     if (ubah($id, $_POST['judul'], $_POST['isi'], $gambar)) {
//         header("Location: index.php");
//     } else {
//         echo "Gagal mengubah berita!";
//     }
// }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Ubah data berita</title>
    </head>
    <body>
        <h1>Ubah data berita</h1>

        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $berita["id"]; ?>">
        <input type="hidden" name="gambar" value="<?= $berita["gambar"]; ?>">
            <ul>
                <li> 
                  <label for="nama">Judul : </label>
                  <input type="text" name="judul" value="<?= $berita['judul']; ?>" required>
                  </li>
                <li>
                <label for="nama">Isi :</label>
                <textarea name="isi" required><?= $berita['isi']; ?></textarea>

                </li>
                <li>
                    <label for="gambar">Gambar : </label> <br>
                    <img src="img/<?= $berita['gambar']; ?>"> <br>
                    <input type="file" name="gambar" id="gambar" >
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data!</button>
                </li>
            </ul>

    </body>
</html>