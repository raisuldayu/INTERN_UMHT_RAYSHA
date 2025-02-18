<?php 

// require_once 'App/Produk/inf boProduk.php';
// require_once 'App/produk/Produk.php';
// require_once 'App/produk/Idol.php';
// require_once 'App/Produk/Novel.php';
// require_once 'App/Produk/CetakInfoProduk.php';


spl_autoload_register(function( $class ){
    require_once __DIR__ .'Produk/' . $class . 'php';

});