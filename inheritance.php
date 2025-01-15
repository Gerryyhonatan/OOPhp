<?php
class product {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik") {
            $str .= "- {$this->jmlHalaman} Halaman.";
        } else if ( $this->tipe == "Game") {
            $str .= "- {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class cetakInfoProduct {
    public function cetak(product $product) {
        $str = "{$product->judul} | {$product->getLabel()} (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new product("One Piece", "Eichiro Oda", "Gramedia", 150000, 100, 0, "Komik");
$product2 = new product("One Punch Man", "Eichiro Kishimoto", "Gramedia", 350000, 0, 50, "Game");


echo $product1->getInfoLengkap();
echo "<br>";
echo $product2->getInfoLengkap();



?>