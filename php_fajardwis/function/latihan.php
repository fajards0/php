<?php

    function luasPersegi(){
        echo "<h3>Menghitung Luas Persegi</h3>";
        $sisi = 5;
        echo "Sisi : 5 <br>";
        $luas = $sisi * $sisi;
        echo "Luasnya : $luas <br>";
    }
    function luasPersegiPanjang(){
        echo "<h3>Menghitung Luas Persegi Panjang</h3>";
        $panjang = 5;
        $lebar = 4;
        echo "Panjang : 5 <br>";
        echo "Lebar : 4 <br>";
        $luas = $panjang * $lebar;
        echo "Luasnya : $luas <br>";
    }
    function segitiga(){
        echo "<h3>Menghitung Luas Segitiga</h3>";
        $alas = 3;
        $tinggi = 4;
        echo "Alas : 3 <br>";
        echo "Tinggi : 4 <br>";
        $luas = 0.5 * $alas * $tinggi;
        echo "Luasnya : $luas <br>";
    }
    function lingkaran(){
        echo "<h3>Menghitung Luas Lingkaran</h3>";
        $jari = 2;
        echo "Jari-jari : 5 <br>";
        $luas = 3.14 * $jari * $jari;
        echo "Luasnya : $luas <br>";
    }

    luasPersegi();
    echo "<hr>";
    luasPersegiPanjang();
    echo "<hr>";
    segitiga();
    echo "<hr>";
    lingkaran();
    

?>