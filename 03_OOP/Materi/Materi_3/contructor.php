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

$produk1 = new Produk("Seventeen", "Carat deull", "PLEDIS ENT", 4000);
$produk2 = new Produk("Ayat Ayat cinta", "Habiburrahman El Shirazy", "BAsmala & Republika", 99000);
echo "Idol : " . $produk1->getLabel();
echo "<br>";
echo "Novel : " . $produk2->getLabel();
?>
