<?php
//buat class
class Manusia{
    
    //buat property/attribut
    public $nama = "Dani";
    public $nama2 = "Farel";

    //buat method/function
    public function makan(){
        echo " $this->nama Suka Makan ";
    }
    public function minum(){
        echo " $this->nama2 Suka Minum ";
    }
    
}

//buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>