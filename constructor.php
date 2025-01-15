<?php
class product {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit, $this->judul";
    }
}


$product1 = new product("One Piece", "Eichiro Oda", "Gramedia", 150000);
echo $product1->getLabel();

?>