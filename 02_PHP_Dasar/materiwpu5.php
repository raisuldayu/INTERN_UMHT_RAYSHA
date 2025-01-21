<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

//for( $i = 0; $i < 5; $i++ ) {
//echo "Hello World! <br>";
//}

$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
</head>
</body>

<table border="1" cellpadding="10" cellsparcing="0">
    <?php for( $i = 1; $i <=3; $i++) : ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) 
            : ?>
            <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>

</body>
</html>

<?php
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

$x = 30;
if( $x < 20 ) {
    echo "benar";
} else if( $x == 20 ) {
    echo "maja!";
} else {
    echo "salah";
}

?>