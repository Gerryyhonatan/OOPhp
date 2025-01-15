<?php
class product {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduct {
    public function cetak(product $product) {
        $str = "{$product->judul} | {$product->getLabel()} (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new product("One Piece", "Eichiro Oda", "Gramedia", 150000);

$infoProduct1 = new cetakInfoProduct();
echo $infoProduct1->cetak($product1);

?>