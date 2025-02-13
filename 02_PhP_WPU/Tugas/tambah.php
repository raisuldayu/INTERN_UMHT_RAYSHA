<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'function.php';
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
         <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php'
        </script>
        ";
    }
}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Berita </title>
</head>
<body>
    <h1>Tambah Data Berita</h1>

    <form action="" method="post" enctype="multipart/form-data">

    <ul>
        <li>
            <label for="judul">judul :</label>
            <input type="text" name="judul" id="judul"
            required  autocomplete="off">
        </li>
        <li>
            <label for="berita">berita :</label>
            <input type="text" name="berita" id="berita"
            required  autocomplete="off">
        </li>
        <li>
            <label for="gambar">gambar :</label>
            <input type="file" name="gambar" id="gambar"
            required>
        </li>
        <br>
        <li>
            <button type="submit" name="submit">Tambah data</button>
        </li>
    </ul>
    </form>
</body>
</html>