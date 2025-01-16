<?php

interface infoProduk {
    public function getInfoProduct(); 
}


abstract class product {
    protected $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        return $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }
    
    public function setPenulis( $penulis ) {
        return $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon( $diskon ) {
        return $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga( $harga ) {
        return $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }


    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }    
    
    abstract public function getInfo();

    
}

class komik extends product implements infoProduk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduct() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends product implements infoProduk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduct() {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class cetakInfoProduct {
    public $daftarProduct = [];

    public function tambahProduct( product $product) {
        $this->daftarProduct[] = $product;
    }


    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduct as $p) {
            $str .= "- {$p->getInfoProduct()} <br>";
        }

        return $str;
    }
}


$product1 = new komik("One Piece", "Eichiro Oda", "Shonen Jump", 150000, 100);
$product2 = new game("One Punch Man", "Eichiro Kishimoto", "Sony Computer", 350000, 50);


$cetakProduk = new cetakInfoProduct();
$cetakProduk->tambahProduct( $product1 );
$cetakProduk->tambahProduct($product2 );
echo $cetakProduk->cetak();
?>