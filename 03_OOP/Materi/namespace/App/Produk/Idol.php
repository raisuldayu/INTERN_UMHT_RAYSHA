<?php 

class Idol extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

        parent::__construct(  $judul, $penulis, $penerbit, $harga, $jmlHalaman = 0);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    
    public function getInfoProduk() {
        $str = "Idol : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}





?>