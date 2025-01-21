<?php
//$mahasiswa = [
 //   ["Raisul Dayu", "0087564", "raisuldayu@gmail.com", "pplg"]
//];

// Array Associativ
// definisinya sama seperti array numerik, kecuali
// ley-nya adalah string yang kita buat sendiri
$mahasiswa = [
    "nama" => "Raisul Dayu", 
    "nrp" => "00087564",
    "email" => "raisuldayu@gmail.com",
    "jurusan" => "pplg"
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["nrp"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>