<?php 

// Jualan mobil

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
     public function __construct( $judul, $penulis, $penerbit, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
     }      

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Seventeen", "Carat", "PLEDIS ENT", 40000);
$produk2 = new Produk("Ayat Ayat cinta", "Habiburrahman El Shirazy", "Basmala & Republika", 99000);

echo "Idol : " . $produk1->getLabel();
echo "<br>";
echo "Novel : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>
