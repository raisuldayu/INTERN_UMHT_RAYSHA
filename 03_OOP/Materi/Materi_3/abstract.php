<?php 

abstract class Produk {
    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;
    
     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
     }

     public function setJudul( $judul ) {
        $this->judul = $judul;
     }

     public function getJudul() {
        return $this->judul;
     }

     public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
     }

     public function getPenulis() {
        return $this->penulis;
     }

     public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
     }

     public function setDiskon( $diskon ) {
        $this->diskon = $diskon; 
     }

     public function getDiskon() {
        return $this->diskon;
     }

     public function getPenerbit() {
        return $this->penerbit;
     }

     public function setHarga( $harga ) {
        $this->harga = $harga;
     }
     
     public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk(); 
    
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}


class Idol extends Produk {
    public $jmlHalaman;

    public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

        parent::__construct(  $judul, $penulis, $penerbit, $harga, $jmlHalaman = 0);

        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfoProduk() {
        $str = "Idol : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Novel extends Produk {
    public $waktuBaca;

    public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuBaca = 0) {
        parent::__construct(  $judul, $penulis, $penerbit, $harga, $waktuBaca = 0);

        $this->waktuBaca = $waktuBaca;
    }

    public function getInfoProduk() {
        $str = "Novel : " . $this->getInfo() . " - {$this->waktuBaca} Jam.";
        return $str;
    }
}


class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }


    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .="- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Idol("Seventeen", "Carat", "PLEDIS ENT", 30000, 100);
$produk2 = new Novel("Ayat Ayat cinta", "Habiburrahman El Shirazy", "Basmala & Republika", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();


?>
