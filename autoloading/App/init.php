<?php


// require_once 'Produk/infoProduk.php';
// require_once 'Produk/product.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/game.php';
// require_once 'Produk/cetakInfoProduct.php';

spl_autoload_register(function($class) {
    require_once __DIR__ . '/Produk/' . $class .'.php' ;
});

?>