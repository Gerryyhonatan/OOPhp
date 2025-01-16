<?php


// require_once 'Produk/infoProduk.php';
// require_once 'Produk/product.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/game.php';
// require_once 'Produk/cetakInfoProduct.php';
// require_once 'Produk/user.php';

// require_once 'Service/user.php';

spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class .'.php' ;
});

spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class .'.php' ;
});

?>