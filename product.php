<?php
class product {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 5000;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$product1 = new product();
$product1->judul = "Naruto";
$product1->penulis = "Masashi Kishimoto";
$product1->penerbit = "Shonen Jump";
$product1->harga = 50000;

echo $product1->getLabel();
?>