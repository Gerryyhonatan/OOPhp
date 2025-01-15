<?php

class contohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Hallo World";
    }
}


echo contohStatic::$angka;
echo "<br>";
echo contohStatic::halo();
echo "<br>";
?>