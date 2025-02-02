<?php
class product {
    private $judul,
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

    public function getInfoProduct() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class komik extends product {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduct() {
        $str = "Komik : " . parent::getInfoProduct() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends product {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct() {
        $str = "Game : " . parent::getInfoProduct() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class cetakInfoProduct {
    public function cetak(product $product) {
        $str = "{$product->judul} | {$product->getLabel()} (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new komik("One Piece", "Eichiro Oda", "Shonen Jump", 150000, 100);
$product2 = new game("One Punch Man", "Eichiro Kishimoto", "Sony Computer", 350000, 50);


echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";

$product1->setJudul("JudulBaru");
echo $product1->getJudul();
?>