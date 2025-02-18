<?php
session_start();
require 'function.php';

if ( !isset($_SESSION['login']) ) {
    header("Location: login.php");
    exit();
}

$portals = query("SELECT * FROM berita");
if( isset($_POST["cari"]) ) {
    $siswi = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admmin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Berita</h1>

<a href="tambah.php">Tambah Berita</a>
<br></br>

<table border="1">
    <tr>
        <th>Judul</th>   
        <th>Isi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($portals as $portal) : ?>
        <tr>
            <td><?= $portal['judul']; ?></td>
            <td><?= $portal['isi']; ?></td>
            <td><img src="uploads/<?= $portal['gambar']; ?>" width="100"></td>
            <td>
                <a href="ubah.php?id=<?= $portal['id']; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $portal['id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>