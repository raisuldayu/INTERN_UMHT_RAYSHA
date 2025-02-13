<?php

$conn = mysqli_connect("localhost", "root", "", "portal-berita");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $judul =  htmlspecialchars($data["judul"]);
    $berita = htmlspecialchars($data["berita"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
    return false;
    }

    $query = "INSERT INTO berita
    VALUES
    ('', '$judul', '$berita', '$gambar')
    ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}


function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!!');
            </script>";
            return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'uploads/' . $namaFileBaru);

    return $namaFileBaru;



}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM berita WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;
    $id = $data["id"];
    $judul =  htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
  // Check if the user uploaded a new image
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }
  $gambar = htmlspecialchars($data["gambar"]);


    $query = "UPDATE berita SET
                judul = '$judul',
                isi = '$isi',
                gambar = '$gambar'
              WHERE id = $id
            ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM portal-berita
                WHERE
            nama = '$keyword'
            ";
    return query($query);            
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert('username sudah terdaftar!')
            </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

?>