<?php

class manusia{

    public $nama = "Farel nigga";

    private function tampilkan_nama(){
        echo "Nama saya mager <br>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
//manggil method
echo $cetak->keluarkan();
//manggil property
echo $cetak->nama;