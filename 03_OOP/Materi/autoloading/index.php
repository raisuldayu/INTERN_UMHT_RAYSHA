<?php 

require_once 'App/init.php';

$produk1 = new Idol("Seventeen", "Carat", "PLEDIS ENT", 30000, 100);
$produk2 = new Novel("Ayat Ayat cinta", "Habiburrahman El Shirazy", "Basmala & Republika", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();


