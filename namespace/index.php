<?php

require_once 'App/init.php';

// $product1 = new komik("One Piece", "Eichiro Oda", "Shonen Jump", 150000, 100);
// $product2 = new game("One Punch Man", "Eichiro Kishimoto", "Sony Computer", 350000, 50);


// $cetakProduk = new cetakInfoProduct();
// $cetakProduk->tambahProduct( $product1 );
// $cetakProduk->tambahProduct($product2 );
// echo $cetakProduk->cetak();

use App\Service\user as ServiceUser;
use App\Service\user as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();


?>