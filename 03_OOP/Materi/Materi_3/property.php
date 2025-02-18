<?php 

// Jualan mobil

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}
// $produk1 = new Produk();
// $produk1->judul = "Sasuke";
// var_dump($produk1);

// $produk = new Produk();
// $produk->judul = "Uncharted";
// $produk2->tambahProperty = "wkwkk";
// var_dump($produk2);
// 

$produk3 = new Produk();
$produk3->judul = "Seventeen";
$produk3->penulis = "Carat deull";
$produk3->penerbit = "PLEDIS ENT";
$produk3->harga = 4000;

echo $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Ayat Ayat cinta";
$produk4->penulis = "Habiburrahman El Shirazy";
$produk4->penerbit = "Basmala & Republika";
$produk4->harga = 99000;

echo "Idol : " . $produk3->getLabel();
echo "<br>";
echo "Novel : " . $produk4->getLabel();
?>