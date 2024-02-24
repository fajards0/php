<?php
//buat class
class BangunDatar{
    
    //buat property/attribut
    public $nama = "Menghitung Luas Persegi";
    public $nama2 = "Menghitung Luas Persegi Panjang";
    public $nama3 = "Menghitung Luas Segitiga";
    public $nama4 = "Menghitung Luas lingkaran";


    //buat method/function
    public function luasPersegi(){
        echo "<h3>$this->nama</h3>";
        $sisi = 5;
        echo "Sisi : 5 <br>";
        $luas = $sisi * $sisi;
        echo "Luasnya : $luas <br>";
    }
    public function luasPersegiPanjang(){
        echo "<h3>$this->nama2</h3>";
        $panjang = 5;
        $lebar = 4;
        echo "Panjang : 5 <br>";
        echo "Lebar : 4 <br>";
        $luas = $panjang * $lebar;
        echo "Luasnya : $luas <br>";
    }
    public function segitiga(){
        echo "<h3>$this->nama3</h3>";
        $alas = 3;
        $tinggi = 4;
        echo "Alas : 3 <br>";
        echo "Tinggi : 4 <br>";
        $luas = 0.5 * $alas * $tinggi;
        echo "Luasnya : $luas <br>";
    }
    public function lingkaran(){
        echo "<h3>$this->nama4</h3>";
        $jari = 2;
        echo "Jari-jari : 5 <br>";
        $luas = 3.14 * $jari * $jari;
        echo "Luasnya : $luas <br>";
    }
    
}

//buat object
$cetak = new BangunDatar();

echo $cetak->luasPersegi();
echo "<br>";
echo $cetak->luasPersegiPanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();

?>